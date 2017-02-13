<?php
/* $article = new article();
$listall = $article->listall();
include('view/article/listall.php'); */
$Pagination = new Pagination();
$article = new article(); // Khởi tạo class User
 
$limit = $Pagination->limit; // Số record hiển thị trên một trang
$stat = $Pagination->start(); // Vị trí của record
$totalRecord = $article->totalRecord(); // Tổng số user có trong database
$totalPages = $Pagination->totalPages($totalRecord); // Tổng số trang tìm được
 
$listall = $article->listall($stat, $limit);
include('view/article/listall.php');
?>