<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link type="text/css" rel="stylesheet" href="library/css/bootstrap.min.css">
</head>
<body>
<?php
	include('library/autoload.php');
	include('library/conn.php');
	include('library/pagination.php');
	if(isset($_GET['controller'])){
		switch($_GET['controller']){
			case "article" : include('controller/article/controller.php');
			break;
			case "category" : include('controller/category/controller.php');
			break;
		}
	}
	else{
		header('location: index.php?controller=article&action=listall');
	}
?>
</body>
