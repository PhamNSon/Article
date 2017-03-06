<?php
 class Article {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
	public $id;
	public $title;
	public $content;
	public $image;
	public $viewed;
	public $created;
	public $modified;

    public function __construct($id, $title, $content, $image, $viewed, $created, $modified) {
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
		$this->image = $image;
		$this->viewed = $viewed;
		$this->created = $created;
		$this->modified = $modified;
    }

    public static function all($start, $limit) {
		$list = [];
		$db = Db::getInstance();
		$req = $db->prepare('SELECT * FROM articles LIMIT :start,:limit');
		$req->bindValue(':start', (int)$start, PDO::PARAM_INT);
		$req->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
		$req->execute();
		// we create a list of Post objects from the database results
		foreach($req->fetchAll() as $e) {
			$list[] = new Article($e['id'], $e['title'], $e['content'], $e['image'], $e['viewed'], $e['created'], $e['modified']);
		}
		return $list;
    }

	public static function save(){
		$db = Db::getInstance();
 		if(isset($_POST['sub'])){
			$title=$_POST['title'];
			$content=$_POST['content'];
			$now=getdate();
			$datecreated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"]. " ".$now["hours"].":".$now["minutes"].":".$now['seconds'] ;
			$dateupdated=$now["year"] . "-" . $now["mon"] . "-" . $now["mday"]. " ".$now["hours"].":".$now["minutes"].":".$now['seconds'] ;
			$viewed = 1;
			$file = rand(1000,100000)."-".$_FILES['image']['name'];
			$file_loc = $_FILES['image']['tmp_name'];
			$folder="library/images/";
			$new_file_name = strtolower($file);
			$final_file=str_replace(' ','-',$new_file_name);
			if(move_uploaded_file($file_loc,$folder.$final_file)){
				$req = $db->prepare("insert into articles(title,content,image,viewed,created,modified) values (:title,:content,:image,:viewed,:created,:modified)");
				$req->execute(array(':title' => $title, ':content' => $content, ':image' => $final_file, 'viewed' => $viewed, ':created' => $datecreated, ':modified' => $dateupdated));
				header('location:index.php?controller=article&action=success');
			}else {
				echo "<script>alert('Cant create new article');window.history.back(-1);</script>";
			}
		}
	}

	public static function totalRecord(){
		$db = Db::getInstance();
		$req = $db->query("select * from articles");
		return $req->columnCount();
	}

    public static function find($id) {
		$db = Db::getInstance();
		// we make sure $id is an integer
		$id = intval($id);
		if (empty($_COOKIE['view'])){
			$req1 = $db->prepare('UPDATE articles SET viewed=viewed+1 where id = :id');
			$req1->execute(array('id' => $id));
		}
		$req = $db->prepare('SELECT * FROM articles WHERE id = :id');
		// the query was prepared, now we replace :id with our actual $id value
		$req->execute(array('id' => $id));

		$article = $req->fetch();
		return new Article($article['id'], $article['title'], $article['content'], $article['image'], $article['viewed'], $article['created'], $article['modified']);
    }
  }
?>