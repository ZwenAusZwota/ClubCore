<?php 

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

function getCurrentPage() {
    return isset($_GET['page']) ? $_GET['page'] : 'home';
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function resizeImage($data, $max_width, $max_height){
	
    list($orig_width, $orig_height) = getimagesizefromstring($data);

    $width = $orig_width;
    $height = $orig_height;

    # taller
    if ($height > $max_height) {
        $width = ($max_height / $height) * $width;
        $height = $max_height;
    }

    # wider
    if ($width > $max_width) {
        $height = ($max_width / $width) * $height;
        $width = $max_width;
    }

    $image_p = imagecreatetruecolor($width, $height);

    $image = imagecreatefromstring($data);

    imagecopyresampled($image_p, $image, 0, 0, 0, 0, 
                                     $width, $height, $orig_width, $orig_height);

    return $image_p;
}

?>