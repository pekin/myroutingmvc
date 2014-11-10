<?php

class Model_Pages extends Model
{
	
	public function getPage($slug)
	{	
		$slug = $this->checkUserData($slug);
		$conn = $this->ConnectDB();
		if($conn->connect_error) 
			return false;
		else
			$result = $conn->query("SELECT * FROM static_pages WHERE slug='$slug'");

		if ($result->num_rows > 0){
			return $result->fetch_assoc();
		}
		return false;
	}

		public function getAllPages()
	{	
		$conn = $this->ConnectDB();
		$data = array();
		if($conn->connect_error) 
			return false;
		else
			$result = $conn->query("SELECT * FROM static_pages");

		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$data[]= $row;
			}
			return $data;
		}
		return false;

	}

	public function getPageById($id)
	{
		$id = $this->checkUserData($id);
		$conn = $this->ConnectDB();
		if($conn->connect_error) 
			return false;
		else
			$result = $conn->query("SELECT * FROM static_pages WHERE id='$id'");

		if ($result->num_rows > 0){
			return $result->fetch_assoc();
		}
		return false;
	}

}
