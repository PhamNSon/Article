<?php
class conn{
	protected $host="localhost";
	protected $name="root";
	protected $pass="";
	protected $db="article";

	protected $con;
	protected $result;
	
	public function connect(){
		$this->con=mysqli_connect($this->host,$this->name,$this->pass,$this->db);
	}
	
	public function disconnect(){
		if($this->con){
			mysqli_close($this->con);
		}
	}
	
	public function query($sql){
		if($this->con){
			$this->free_query();
			$this->result = mysqli_query($this->con,$sql);
		}
	}
	
	public function free_query(){
		if($this->result){
			mysqli_free_result($this->result);
		}
	}
	
	public function num_row(){
		if($this->result){
			$row = mysqli_num_rows($this->result);
			return $row;
		}
	}
	
	public function fetch(){
		if($this->result){
			$row = mysqli_fetch_array($this->result);
			return $row;
		}
	}
}
?>