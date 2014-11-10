<?php
use Routing\Router;
class Controller_Contact extends Controller
{
	
	function action_index()
	{			
		$this->loadModel('contact'); //обращаемся к методу loadModel в controller
		
		$new = new Model_Contact();
		$data = $new->select_contact();#var_dump($data);
		echo $this->view->render('main/contact_view.php', array('data' => $data));
		
		
	}
}
?>
