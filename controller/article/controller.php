<?php
if(isset($_GET['action'])){
	switch($_GET['action']){	
		case 'listall': include('controller/article/listall.php');
		break;
		case 'view': include('controller/article/viewid.php');
		break;
		case 'create' : include('controller/article/create.php');
		break;
		case 'success' : include('controller/article/done.php');
		break;
	}
	
}
?>