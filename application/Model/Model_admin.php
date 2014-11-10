<?php
class Model_Admin extends Model{
	
	public $_SESSION;
	public $_POST;
	function autorized (){
		$post_user = $_POST['user'];
		$post_pass = $_POST['pass'];
		$session_user = $_SESSION['user'];
		$session_pass = $_SESSION['pass'];
		$redir = '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=/look">';
		$this->connect_db();
		switch ((!$post_user) OR (!$session_user))
		{
			case ($post_user):
			if (empty($post_user)){echo $redir; exit();}
				if (empty($post_pass)){echo $redir; exit();}
				$result = mysql_query ("SELECT * FROM userlist WHERE user = '".$post_user."'");
				$myrow = mysql_fetch_array($result);        
		
				if ($myrow['pass'] == $post_pass)
				    { 
				        $_SESSION['user'] = $post_user;
				        $_SESSION['pass'] = $post_pass;
				    }
				else
				    {
				        echo $redir;
				        exit(); 
				    }
			break;
			case ($session_user):
			if (empty($session_user)){echo $redir; exit();}
				if (empty($session_pass)){echo $redir; exit();}
				$result = mysql_query ("SELECT * FROM userlist WHERE user = '".$session_user."'");
				$myrow = mysql_fetch_array($result);        
				
				if ($myrow['pass'] == $session_pass)
				    { 
				    
				    }
				else
				    {
				        echo $redir;
				        exit(); 
				    }
			  break;
			  default:
			  echo $redir; exit();
			  break; 
		}
		

	}
	function quit(){
		session_start();
		session_unset();
		session_destroy();
	}
}
