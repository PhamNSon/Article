<?php
if(isset($_POST['sub'])){
	$title=$_POST['title'];
	$content=$_POST['content'];
	//$datecreated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"] ;
	if($title && $content){
		$article=new article();
		$article->set_title($title);
		$article->set_content($content);
		$article->set_status(1);
		if($article->create()=="fail"){
			$err="error";
		}else{
			echo "Add article successfully";
			header('location:index.php?controller=article&action=success');
		}
	}
}
include('view/article/createarticle.php');
?>