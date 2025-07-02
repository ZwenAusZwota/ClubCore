<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>{$title}</title>
	  
		{* Additional header informations that will be displayed if the header was set through $page->addHeader() *}
		{$additionalHeaderData}
	  
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/solid.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css">
				
		<link rel="stylesheet" type="text/css" href="{$mainURL}/{$themeURL}css/styles.css" />
		{foreach $css as $url}
		{strip}
			 <link rel="stylesheet" type="text/css" href="{$url}">
		{/strip}
		{/foreach}
		<!--
		<link rel="stylesheet" type="text/css" href="{$themeURL}/css/modal-login.css">
		<link rel="stylesheet" type="text/css" href="{$themeURL}/css/preferences.css">
		-->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		{foreach $js as $url}
		{strip}
			 <script src="{$url}"></script>
		{/strip}
		{/foreach}
		
		<!--<script src="{$themeURL}/js/modal-login.js"></script>
		
		<script src="{$themeURL}/js/preferences.js"></script>-->
	</head>
	<body id={$id} >