<!DOCTYPE html>
<html>
<head>
	<title><?=$title?>::DermaReport</title>
	<?php foreach ($scripts as $link):?>
		<script src="<?=$link?>"></script>
	<?php endforeach?>
	<?php foreach ($styles as $link):?>
		<link rel="stylesheet" type="text/css" href="<?=$link?>">
	<?php endforeach?>
</head>
<body>
