<?php
class ArticlesController {
    public function listall() {
		// we store all the posts in a variable
		$article = Article::all();
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

	public function error(){
		include('views/article/error.php');
	}

	public function success(){
		include('views/article/done.php');
	}
  }
?>