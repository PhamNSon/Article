<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$Pagination = new Pagination();
	$category = new category();
	$category->set_id1($id);
	$limit = $Pagination->limit; // Số record hiển thị trên một trang
	$stat = $Pagination->start(); // Vị trí của record
	$totalRecord = $category->totalRecord(); // Tổng số user có trong database
	$totalPages = $Pagination->totalPages($totalRecord); // Tổng số trang tìm được
	$view = $category->view($stat, $limit);
}
include('view/category/viewid.php');
?>