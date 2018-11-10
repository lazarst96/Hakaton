<!DOCTYPE html>
<html>
<head>
	<title><?=$title?>::DermaReport</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php foreach ($scripts as $link):?>
		<script src="<?=$link?>"></script>
	<?php endforeach?>
	<?php foreach ($styles as $link):?>
		<link rel="stylesheet" type="text/css" href="<?=$link?>">
	<?php endforeach?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
