<?php
class article extends conn{
	protected $id;
	protected $category_id;
	protected $title;
	protected $content;
	protected $tags;
	protected $status;
	protected $date_created;
	protected $date_updated;
	
	public function __construct(){
		$this->connect();
	}

	public function set_id($id){
		$this->id=$id;
	}
	
	public function get_id(){
		return $this->id;
	}

	public function set_categoryid($category_id){
		$this->categoryid=$category_id;
	}
	
	public function get_categoryid(){
		return $this->categoryid;
	}
	
	public function set_title($title){
		$this->title=$title;
	}
	
	public function get_title(){
		return $this->title;
	}
	
	public function set_content($content){
		$this->content=$content;
	}
	
	public function get_content(){
		return $this->content;
	}
	
	public function set_status($status){
		$this->status=$status;
	}
	
	public function get_status(){
		return $this->status;
	}
		
	public function listall($start, $limit){
		$sql = "SELECT * FROM articles LIMIT $start, $limit";
		$this->query($sql);
		$result = array();
		$i = 0;
		while ($row = $this->fetch()){
			$result[$i]=array("id"=>$row['id'],"title"=>$row['title'],"content"=>$row['content'],"status"=>$row['status'],"datecreated"=>$row['date_created'],"dateupdated"=>$row['date_updated']);
			$i++;
		}	
		return $result;
/*   		$sql="select count(id) as total from articles";
		$this->query($sql);
		$row=$this->fetch();
		$total_records = $row['total'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
        $total_page = ceil($total_records / $limit);
 
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        $start = ($current_page - 1) * $limit;
		$sql1="SELECT * FROM articles LIMIT $start, $limit";
		$this->query($sql1);
		$result = array();
         if ($current_page > 1 && $total_page > 1){
            echo '<a href="index.php?controller=article&action=listall&page='.($current_page-1).'">Prev</a> | ';
            }
			
        for ($i = 1; $i <= $total_page; $i++){
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="index.php?controller=article&action=listall&page='.$i.'">'.$i.'</a> | ';
            }
        }
 
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="index.php?controller=article&action=listall&page='.($current_page+1).'">Next</a> | ';			
		}
 
		$sql="select * from articles";$this->query($sql);
		$i = 0;
		while ($row = $this->fetch()){
			$result[$i]=array("id"=>$row['id'],"title"=>$row['title'],"content"=>$row['content'],"status"=>$row['status'],"datecreated"=>$row['date_created'],"dateupdated"=>$row['date_updated']);
			$i++;
		}
		
		return $result;*/	
	}
	
	public function totalRecord(){
		$sql = "select * from articles";
		$this->query($sql);
		return $this->num_row();
	}
	
	public function view(){
		$sql="select * from articles where id='$this->id'";
		$this->query($sql);
		$row=$this->fetch();
		return $row;
	}
	public function create(){
		$now=getdate();
		$datecreated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"]. " ".$now["hours"].":".$now["minutes"].":".$now['seconds'] ;
		$dateupdated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"]. " ".$now["hours"].":".$now["minutes"].":".$now['seconds'] ;
		if($this->num_row()==0){
			$sql="insert into articles(category_id,title,content,status,date_created,date_updated) values ('$this->categoryid','$this->title','$this->content','$this->status','$datecreated','$dateupdated')";
			$this->query($sql);
		}
		else{
			return "fail";
		}
	}
}
?>