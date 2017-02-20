<?php
 class Article {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
	public $id;
	public $category_id;
	public $title;
	public $content;
	public $tags;
	public $status;
	public $created;
	public $modified;

    public function __construct($id, $category_id, $title, $content, $tags, $status, $created, $modified) {
		$this->id = $id;
		$this->category_id = $category_id;
		$this->title = $title;
		$this->content = $content;
		$this->tags = $tags;
		$this->status = $status;
		$this->created = $created;
		$this->modified = $modified;
    }

    public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM articles');
		// we create a list of Post objects from the database results
		foreach($req->fetchAll() as $e) {
			$list[] = new Article($e['id'], $e['category_id'], $e['title'], $e['content'], $e['tags'], $e['status'], $e['created'], $e['modified']);
		}
		return $list;
    }

	public static function save(){
		$db = Db::getInstance();
 		if(isset($_POST['sub'])){
			$title=$_POST['title'];
			$content=$_POST['content'];
			$cate = $_POST['cate'];
			$status ='1';
			$now=getdate();
			$datecreated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"]. " ".$now["hours"].":".$now["minutes"].":".$now['seconds'] ;
			$dateupdated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"]. " ".$now["hours"].":".$now["minutes"].":".$now['seconds'] ;
			$req = $db->prepare("insert into articles(category_id,title,content,status,created,modified) values (:category_id,:title,:content,:status,:created,:modified)");
			$req->execute(array(':category_id' => $cate, ':title' => $title, ':content' => $content, ':status' => $status, ':created' => $datecreated, ':modified' => $dateupdated));
			header('location:index.php?controller=article&action=success');
		}
	}

    public static function find($id) {
		$db = Db::getInstance();
		// we make sure $id is an integer
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM articles WHERE id = :id');
		// the query was prepared, now we replace :id with our actual $id value
		$req->execute(array('id' => $id));
		$article = $req->fetch();
		return new Article($article['id'], $article['category_id'], $article['title'], $article['content'], $article['tags'], $article['status'], $article['created'], $article['modified']);
    }
  }
?>