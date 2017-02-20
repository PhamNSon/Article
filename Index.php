<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link type="text/css" rel="stylesheet" href="library/css/bootstrap.min.css">
</head>
<body>
<?php
	include('connection.php');
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action     = $_GET['action'];
	}else{
		$controller = 'article';
		$action     = 'listall';
	}
	include('views/layout.php');
?>
</body>