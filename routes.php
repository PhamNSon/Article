<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
		case 'category':
			include('models/category.php');
			$controller = new CategoriesController();
		break;
		case 'article':
			// we need the model to query the database later in the controller
			include('models/article.php');
			$controller = new ArticlesController();
		break;
    }

     $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('category' => ['show','create'],
                       'article' => ['listall', 'show', 'create','error','success']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('article', 'error');
    }
  } else {
    call('article', 'error');
  }
?>