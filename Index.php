<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link type="text/css" rel="stylesheet" href="library/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="library/css/simple-sidebar.css">
<script type="text/javascript" src="library/js/jquery.js"></script>
</head>
<?php
	include('connection.php');
	include('pagination.php');
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action     = $_GET['action'];
	}else{
		$controller = 'article';
		$action     = 'listall';
	}
	include('views/layout.php');
?>
<footer>
</footer>
</html>