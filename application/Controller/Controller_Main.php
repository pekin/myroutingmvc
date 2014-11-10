<?php
use Routing\Router;
class Controller_Main extends Controller
{

	function action_index()
	{	
		echo $this->view->render('main/main_view.php');
	}
	
	function look()
	{
		$this->loadModel('admin');
		$aut = new Model_Admin();
		$aut->autorized();
	}
	
	function action_error404()
	{
		echo $this->view->render('main/404_view.php');
	}
	
	function action_staticPage($slug)
	{	
		$model_pages = $this->loadModel('Pages');
		$result = $model_pages->getPage($slug);
		if(!$result)
			$this->stopAndRedirect($this->router->generate('error404'));
		echo $this->view->render('main/static_page.php',  array('page' => $result));
	}
}
