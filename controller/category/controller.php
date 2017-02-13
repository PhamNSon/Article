<?php
if(isset($_GET['action'])){
	switch($_GET['action']){	
		case 'view': include('controller/category/viewid.php');
		break;
	}
	
}
?>