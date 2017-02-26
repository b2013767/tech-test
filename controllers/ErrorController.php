<?php 
require_once '../content/Controller.php';


class Error extends Controller
{
	public function indexAction()
	{
                $this->view =  new View;
		$this->view->errormessage = 'Error - Page does not Exist';
                $this->view->render('views/Error/Index.php');
	}
}