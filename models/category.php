<?php
 class Category {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
	public $id;
	public $name;
	public $created;
	public $modified;
	
    public function __construct($id,$name,$created,$modified){
		$this->id = $id;
		$this->name = $name;
		$this->created = $created;
		$this->modified = $modified;
    }

	public static function find($id) {
		$db = Db::getInstance();
		// we make sure $id is an integer
		$id = intval($id);
		$req = $db->prepare("SELECT * FROM articles WHERE category_id = :id");
		// the query was prepared, now we replace :id with our actual $id value
		$req->execute(array('id' => $id));
		$req->fetch();
		$i = 0;
		$list = [];
		while ($row = $req->fetch())  {
			$list[$i] = array("id"=>$row['id'],"category_id"=>$row['category_id'],"title"=>$row['title'],"content"=>$row['content'],"status"=>$row['status'],"datecreated"=>$row['created'],"dateupdated"=>$row['modified']);
			$i++;
		}
		return $list;
    }
 }
 ?>
	