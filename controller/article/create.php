<?php
if(isset($_POST['sub'])){
	$title=$_POST['title'];
	$content=$_POST['content'];
/* 	if(($_POST['cate'])== 'News'){
		$cate=1;
	}elseif(($_POST['cate'])== 'Weather'){
		$cate=2;
	}elseif(($_POST['cate'])== 'Life'){
		$cate=3;
	}else echo "Error"; */
	$cate = $_POST['cate'];
	//$datecreated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"] ;
	if($title && $content &&$cate){
		$article=new article();
		$article->set_categoryid($cate);
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