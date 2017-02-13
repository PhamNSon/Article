<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$article = new article();
	$article->set_id($id);
	$result = $article->view();
}
include('view/article/viewid.php');
?>