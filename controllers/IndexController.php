<?php 
require_once '../content/Controller.php';


class Index extends Controller
{
                
	public function indexAction()
	{
                $this->model =  new People;
                $datafromjson = $this->model->getFile();
                $this->view =  new View;
		$this->view->message = 'Sky Bet Technical Test';
                $data =  json_decode($datafromjson, true);
                $i = 0;
                
                $array_count = count($data);
                $results = array();
                
                while($i < $array_count)
                {       
                        $person = $data[$i]['firstname'] . ' ' . $data[$i+1]['surname'];
                        array_push($results, $person);
                        $i = $i + 2;
                }

                
                $this->view->results = $results;
                $this->view->render('views/Index/index.php');
	}
        public function formpostAction()
	{
                $this->view =  new View;
                $this->model =  new People;
                $json = json_encode($_POST['people']);
                $data = strip_tags($json);
                $this->model->setFile($data);
                $this->view->message = 'Thank you - Data Submitted';
                $this->view->render('views/Index/submitted.php');
            //}
        }   
}
