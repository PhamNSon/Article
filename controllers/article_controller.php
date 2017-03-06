<?php
class ArticlesController {
    public function listall() {
		$Pagination = new Pagination();
		$limit = $Pagination->limit; // Số record hiển thị trên một trang
		$start = $Pagination->start(); // Vị trí của record
		$totalRecord = Article::totalRecord(); // Tổng số article có trong database
		$totalPages = $Pagination->totalPages($totalRecord); // Tổng số trang tìm được
		// we store all the posts in a variable
		$article = Article::all($start, $limit);
		include('views/article/index.php');
    }

	public function create(){
		Article::save();
		include('views/article/createarticle.php');
	}

    public function show() {
		// we expect a url of form ?controller=posts&action=show&id=x
		// without an id we just redirect to the error page as we need the post id to find it in the database
		if (!isset($_GET['id']))
			return call('article', 'error');

		// we use the given id to get the right post
		$article = Article::find($_GET['id']);
		include('views/article/show.php');
    }

	public function deletet() {
		$db = Db::getInstance();
		if ($_POST['id']){
			$id=$_POST['id'];
			$req = $db->prepare("DELETE FROM articles where id = :id");
			$req->execute(array('id' => $id));
		}
	}

	public function error(){
		include('views/article/error.php');
	}

	public function success(){
		include('views/article/done.php');
	}
  }
?>