<?php
class Model_Contact extends Model{

	function select_contact(){
		$conn = $this->connect_db();
			if($conn == false){
				$result = mysql_query("SELECT text FROM section WHERE str = 'contact'");
				$myrow = (mysql_fetch_array($result));
				$data []= $myrow;

		return $data;
			}
		}
}

?>
