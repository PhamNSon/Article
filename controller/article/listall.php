<?php
$article = new article();
$listall = $article->listall();
include('view/article/listall.php');
?>