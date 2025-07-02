<?php

class Members{
	
	/*hier muss ein eigenes Page-/Smartyhandling rein, wegen der ganzen templates und i18n etc.*/
	private $plugin = null;
	private $smarty;
	
	public function __construct(){
		global $pageHandler;
		global $validLogin;
		
		if(!$validLogin) return;
		
		if($pageHandler){
			$pageHandler->addPluginCSS("members/css/styles.css");
			$pageHandler->addPluginJS("members/js/script.js");
			$pageHandler->addWidget($this->createBirthdayWidget());
			$pageHandler->addWidget($this->createAnniversariesWidget());
		}
	}
	
	public function run(){
		global $pageHandler;
		global $i18n;
		global $validLogin;
		global $mainURL;
		
		if(!$validLogin) return;
		$me = new MenuEntry("members","Mitglieder","members");
		$pageHandler->addMenuEntry($me);
		
		$this->smarty = new \Smarty\Smarty();
		$templateDir = "plugins/members/templates"; // muss die lokal oder global sein?
		$this->smarty->setTemplateDir($templateDir);
		
		$action = isset($_REQUEST['sub']) ? $_REQUEST['sub'] : "";
		
		switch($action){
			case "add":
				$content = $this->handleAddMember();
			break;
			case "edit":
				$content = $this->handleEditMember();
			break;
			default:
				$result = $this->loadMemberList();
				$this->smarty->assign("members",$result);
				$content = $this->smarty->fetch('table2.tpl');
		}
		
		$this->smarty->assign("mainURL",$mainURL);
		$pageHandler->addContent($content);
	}
	
	
	private function loadMemberList($sort=[]){
		global $db;
		
		$query = "SELECT member_id, name, first_name FROM {$db->prefix}member ORDER BY name, first_name ASC";
		$result = $db->execute($query);
		$ret = [];
		while($m = $result->fetch_assoc()){
			
			$query = "SELECT date_value FROM {$db->prefix}member_meta WHERE parameter='birthday' AND member_id='{$m['member_id']}'";
			$res2 = $db->execute($query);
			$m['birthday'] = "";
			if($res2->num_rows > 0){
				$m['birthday'] = $res2->fetch_object()->date_value;
			}else{
				$db->insert("{$db->prefix}member_meta",["member_id"=>$m['member_id'],"parameter" => "birthday"]);
			}
			$ret []= $m;
		}
		return $ret;
		
	}
	
	public function handleAjax($data){
		
		if(!isset($data['action'])){
				return ['status' => 'error', 'message' => "Invalid request, no action specified for plugin 'members'", 'valid' => false];
		}
		switch($data['action']){
			case "get_list":
			$list = $this->loadMemberList();
			return ['status' => 'ok', 'list' => $list ];
			break;
			default: 
			return ['status' => 'error', 'message' => "Invalid request, action not implemented for plugin 'member'", 'data'=>$data];
		}
		
	}
	
	private function handleAddMember(){
		global $db;
		$member = [
			"member_id" => 0,
			"name" => "",
			"first_name" =>"",
			"email" => "",
			"address" => ""
		];
		
		if(!empty($_POST)){
			$params = [
				"name" => $_POST['name'],
				"first_name" => $_POST['first_name'],
				"email" => $_POST['email'],
				"address" => $_POST['address']
			];
			$id = $db->insert("{$db->prefix}member",$params);
			$this->smarty->assign("message","{$params['name']}, {$params['first_name']}  unter {$id} gespeichert.");
			if(isset($_POST['btn_save']))
				header("Location:/members");
		}
		
		$this->smarty->assign("sub","add");
		$this->smarty->assign("member",$member);
		$content = $this->smarty->fetch('profile_edit.tpl');
		return $content;
	}
	
	private function handleEditMember(){
		global $db;
		if(!isset($_REQUEST['id'])){
			return "<strong>404</strong>";
		}
		
		try{
			$id = (int)$_REQUEST['id'];
			
			if(!empty($_POST)){
				$params = [
					"name" => $_POST['name'],
					"first_name" => $_POST['first_name'],
					"email" => $_POST['email'],
					"address" => $_POST['address']
				];
				
				$valueSet = [];
				foreach($params as $key => $value){
					$valueSet []= "{$key} = '{$value}'";
				}
				
				$db->query("UPDATE {$db->prefix}member SET ".implode(",",$valueSet)." WHERE member_id='$id'");
				$this->smarty->assign("message","Daten gespeichert.");
				/*if(isset($_POST['btn_save']))
					header("Location:/members");*/
			}
			
			$result = $db->query("SELECT * FROM {$db->prefix}member WHERE member_id='{$id}'");
			$member = $result->fetch_assoc();
			
			$this->smarty->assign("sub","edit/{$id}");
			$this->smarty->assign("member",$member);
			
			$this->smarty->assign("user_meta_entries",$this->getUserMeta($id));
			
			return $this->smarty->fetch('profile_edit.tpl');
		}catch (Exception $e){
			return $e;
		}
	}
	
	private function getUserMeta($member_id){
		global $db;
		global $i18n;
		
		$sql = "SELECT parameter, date_value, char_value FROM {$db->prefix}member_meta WHERE member_id = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('i', $member_id);
		$stmt->execute();
		$result = $stmt->get_result();

		$user_meta_entries = [];
		while ($row = $result->fetch_assoc()) {
			$entry = [];
			$entry['parameter'] = $i18n->get($row['parameter']);
			   if (!empty($row['date_value'])) {
				// Konvertiere Datum ins deutsche Format
				$timestamp = strtotime($row['date_value']);
				$entry['value'] = $timestamp ? date('d.m.Y', $timestamp) : '';
			} else {
				$entry['value'] = $row['char_value'];
			}	
			$user_meta_entries[] = $entry;
		}


		return $user_meta_entries;
	}
	
	private function getDates($interval){
		global $db;
		
		$result = $db->query("SELECT 
			m.member_id, m.name, m.first_name, d.date_value, d.parameter, YEAR(d.date_value) as year
			FROM {$db->prefix}member_meta as d INNER JOIN {$db->prefix}member as m ON m.member_id = d.member_id
			WHERE ( 
				-- Bereich innerhalb des gleichen Jahres
				(MONTH(date_value) > MONTH(CURDATE())
				 OR (MONTH(date_value) = MONTH(CURDATE()) AND DAY(date_value) >= DAY(CURDATE())))
			  AND
				(MONTH(date_value) < MONTH(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))
				 OR (MONTH(date_value) = MONTH(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))
					 AND DAY(date_value) <= DAY(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))))
			)
			OR (
				-- Bereich über Jahresgrenze (z. B. November bis März)
				MONTH(CURDATE()) > MONTH(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))
				AND (
					(MONTH(date_value) > MONTH(CURDATE())
					 OR (MONTH(date_value) = MONTH(CURDATE()) AND DAY(date_value) >= DAY(CURDATE())))
				  OR
					(MONTH(date_value) < MONTH(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))
					 OR (MONTH(date_value) = MONTH(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))
						 AND DAY(date_value) <= DAY(DATE_ADD(CURDATE(), INTERVAL {$interval} MONTH))))
				)
			) ORDER BY MONTH(d.date_value), DAY(d.date_value) ASC");
		return $result;
	}
	
	private function createBirthdayWidget(){
		global $db;
		
		$result = $this->getDates(1);
		
		$b = [];
		while($row = $result->fetch_object()){
			$yd = date("Y") - $row->year;
			$row->parameter = $yd;
			$b []= $row;
		}
		
		$c = "";
		if(count($b)>0){
			$c .= "<table><tbody>";
			foreach($b as $r){
				$c .= "<tr><td>{$r->name}, {$r->first_name}</td><td>{$r->parameter}</td><td>{$r->date_value}</td></tr>";
			}
			$c .= "</tbody></table>";
		}
		
		$widget = new Widget("Geburtstage kommende 4 Wochen",$c);
		return $widget;
	}
	
	private function createAnniversariesWidget(){
		global $db;

		$result = $this->getDates(6);
			
			$b= [];
			$a= [];
			
			while($row = $result->fetch_object()){
				$yd = date("Y") - $row->year;
				
				if($row->parameter == "birthday"){
					$z = $yd % 10;
					if($z == 0){
						$row->parameter = "{$yd}";
						$b []= $row;
						continue;
					}
				}
				
				if($row->parameter == "wedding"){
					print_r($row);
					$sw = $yd % 25;
					$gw = $yd % 50;
					$dw = $yd % 60;
					
					if($sw == 0){
						$row->parameter = "Silberhochzeit";
						$a []= $row;
						continue;
					}
					
					if($gw == 0){
						$row->parameter = "Goldhochzeit";
						$a []= $row;
						continue;
					}
					
					if($dw == 0){
						$row->parameter = "Diamanthochzeit";
						$a []= $row;
						continue;
					}
				}

			}
		$c = "";
		if(count($b)>0){
			$c .= "<h3>Runde Geburtstage</h3>";
			$c .= "<table><tbody>";
			foreach($b as $r){
				$c .= "<tr><td>{$r->name}, {$r->first_name}</td><td>{$r->parameter}</td><td>{$r->date_value}</td></tr>";
			}
			$c .= "</tbody></table>";
		}
		if(count($a) > 0){
			$c .= "<h3>Jubiläen</h3>";
			$c .= "<h3>Runde Geburtstage</h3>";
			$c .= "<table><tbody>";
			foreach($a as $r){
				$c .= "<tr><td>{$r->name}, {$r->first_name}</td><td>{$r->parameter}</td><td>{$r->date_value}</td></tr>";
			}
			$c .= "</tbody></table>";
		}
	
		$widget = new Widget("Jubiläen kommende 6 Monate",$c);
		return $widget;
	}
}

?>