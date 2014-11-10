<?php
session_start();
use Routing\Router;
class Controller_Edit_Panel extends Controller
{

	function action_index()
	{
		$this->look();
		
		$this->loadModel('news');
		$new = new Model_News();
		$data = $new->select_news();
		
		echo $this->view->render('admin/edit_panel_view.php', array('data' => $data));

	}
	
	function action_add_news()
	{
		
		$this->look();
		echo $this->view->render('admin/add_news_one_view.php');

	}

	function action_edit_news($id)
	{
		
		$this->look();
		
		$this->loadModel('news');
		$new = new Model_News();
		$data = $new->select_newsone($id);

		echo $this->view->render('admin/edit_news_one_view.php', array('data' => $data));

	}
	
	function action_add()
	{
		
		$this->look();
		
		$this->loadModel('news');
		$new = new Model_News();
		$new->add_new();
		
		$redir = 'cp';
		$this->redirect($redir);

	}
	
	function action_edit()
	{
		
		$this->look();
		
		$id = $_POST[id];
		$this->loadModel('news');
		$new = new Model_News();
		$new->edit_new($id);
		
		$redir = 'cp';
		$this->redirect($redir);

	}
		
	function action_del()
	{

		$this->look();

		$this->loadModel('news');
		$new = new Model_News();
		$new->del_new();
		
		$redir = 'cp';
		$this->redirect($redir);

	}	
		
	function action_look()
	{

		echo $this->view->render('admin/look_view.php');

	}
		
	function action_valid()
	{
		
		$this->loadModel('admin');
		$aut = new Model_Admin();
		$aut->autorized();

		$redir = 'cp';
		$this->redirect($redir);

	}
	
	function action_quit()
	{
		$this->loadModel('admin');
		$aut = new Model_Admin();
		$aut->quit();
		
		$redir = 'cp';
		$this->redirect($redir);

	}
}
