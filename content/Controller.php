<?php 

require_once 'View.php';
require_once 'Model.php';


class Controller
{
	public function _construct()
	{
		$this->view = new View();
                $this->model = new Model();
	}
}