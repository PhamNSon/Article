<?php
 class CategoriesController {
    public function show() {
      // without an id we just redirect to the error page as we need the post id to find it in the database
    if (!isset($_GET['id']))
        return call('article', 'error');

      // we use the given id to get the right post
    $q = Category::find($_GET['id']);
    require_once('views/category/index.php');
    }
  }
?>