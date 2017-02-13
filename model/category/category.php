<?php
class category extends conn{
	protected $id1;
	protected $name1;
	protected $date_created;
	protected $date_updated;
	
	public function __construct(){
		$this->connect();
	}

	public function set_id1($id1){
		$this->id1=$id1;
	}
	
	public function get_id1(){
		return $this->id1;
	}
		
	public function set_name($name1){
		$this->name=$name1;
	}
	
	public function get_name(){
		return $this->name;
	}
	
/* 	public function listall(){
		$sql = "SELECT * FROM categories";
		$this->query($sql);
		$result = array();
		$i = 0;
		while ($row = $this->fetch()){
			$result[$i]=array("id"=>$row['id'],"name"=>$row['name'],"datecreated"=>$row['date_created'],"dateupdated"=>$row['date_updated']);
			$i++;
		}	
		return $result;
	} */
	
	public function view($start, $limit){
		$sql="select * from articles where category_id='$this->id1' LIMIT $start, $limit";
		$this->query($sql);
		$result = array();
		$i = 0;
		while ($row = $this->fetch()){
			$result[$i]=array("id"=>$row['id'],"category_id"=>$row['category_id'],"title"=>$row['title'],"content"=>$row['content'],"status"=>$row['status'],"datecreated"=>$row['date_created'],"dateupdated"=>$row['date_updated']);
			$i++;
		}	
		return $result;
	}
	
	public function totalRecord(){
		$sql = "select * from categories";
		$this->query($sql);
		return $this->num_row();
	}
	
}	
?>