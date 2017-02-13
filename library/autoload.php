<?php
$controller = $_GET['controller'];
function __autoload($file_name){
	include_once('model/'.$GLOBALS['controller'].'/'.$file_name.'.php');
}
?>