<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	$model = $_GET["model"];
	if($model == ""){
		$model = 'model';
	}
	$uri .= '/index.html?model=';
	$uri .= $model;
	header('Location: '.$uri);
	exit;
?>