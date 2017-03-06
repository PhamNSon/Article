<?php
/**
- Pagination
- Author : Localhost
- Phpandmysql.net
*/
class Pagination{
  
public $limit = 5; // số record hiển thị trên một trang
 /**
   - Tìm ra vị trí start
 */
public function start(){
	if(isset($_GET['start'])){
		$start = $_GET['start'];
	}else{
		$start = 0;
	}
	return $start;
}
  
 /**
   - Tìm ra tổng số trang
 */
 public function totalPages($totalRecord){
	if(isset($_GET['pages'])){
		$totalPages = $_GET['pages'];
	}else{
		$totalPages = ceil($totalRecord/$this->limit);
	}
	return $totalPages;
 }
  
 /**
   - Gọi ra list phân trang
 */
public function listPages($totalPages){
	$start = $this->start();
	$limit = $this->limit;
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    if ($current_page > $totalPages){
        $current_page = $totalPages;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    if ($current_page > 1 && $totalPages > 1){
		$newstart = $start - $limit;
        echo '<a href="index.php?controller=article&action=listall&page='.($current_page-1).'&start='.$newstart.'">Prev</a>';
    }

    for ($i = 1; $i <= $totalPages; $i++){
		$newstart = ($i - 1)*$limit;
        if ($i == $current_page){
            echo '<span>'.$i.'</span>';
        }
        else{
            echo '<a href="index.php?controller=article&action=listall&page='.$i.'&start='.$newstart.'">'.$i.'</a>';
        }
    }
    
    if ($current_page < $totalPages && $totalPages > 1){
		$newstart = $start + $limit;
        echo '<a href="index.php?controller=article&action=listall&page='.($current_page+1).'&start='.$newstart.'">Next</a>';			
	}
}	
}