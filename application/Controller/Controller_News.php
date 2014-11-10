<?php
use Routing\Router;
class Controller_News extends Controller
{
	
	function action_index()
	{			
		$this->loadModel('news'); //обращаемся к методу loadModel в controller
		
		$new = new Model_News();
		$data = $new->select_news();#var_dump($data);
		echo $this->view->render('news/news_view.php', array('data' => $data, 'pager' => $pager));
		
		
	}
		
	function action_newsone($id)
	{	
		$this->loadModel('news'); //обращаемся к методу loadModel в controller
		$new = new Model_News();
		$data = $new->select_newsone($id);
		echo $this->view->render('news/news_one_view.php', array('data' => $data));
		
	}


}

