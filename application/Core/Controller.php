<?php

class Controller {
	
	public $model;
	public $view;
	function __construct()
	{
		global $router;
		$this->router = $router;
		$loader = new Twig_Loader_Filesystem(DIR_VIEW);
		$this->view = new Twig_Environment($loader, array(
		    'cache'       => 'compilation_cache',
		    'auto_reload' => true,
		    'debug' => true
		));
		$this->view->addGlobal('url', $this->router);
		$this->view->addExtension(new Twig_Extension_Debug());

	}
	public function Id(){	$id = $_GET['id'];}
	

	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		
	}
	
	public function redirect($redir){
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../' . $redir . '">';
	}
	
	public function loadModel($model) {
	$file  = 'application/Model/Model_' . $model . '.php';
	$class = 'Model_' . preg_replace('/[^a-zA-Z0-9]/', '', $model);


	if (file_exists($file)) { 
		include_once($file);
		}
	else{
			var_dump($file);  
			echo '<br>';
			var_dump($class);
		die('Не удалось подключить модель');				
		}
	return new $class;
	}
	public function look() {
		$this->loadModel('admin');
		$aut = new Model_Admin();
		$aut->autorized();
	}
}
