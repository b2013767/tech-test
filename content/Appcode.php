<?php

class Appcode
{

    public function __construct(){
    //router
        $request_uri = $_SERVER['REQUEST_URI'];
        $tokens = explode('/',$_SERVER['REQUEST_URI']);


//
//        echo '<pre>';
//        print_r($tokens);
//        echo '</pre>';
          //  phpinfo();


        if (isset($tokens[2])){
                $controllerName = ucfirst($tokens[1]);
                $actionName =  $tokens[2] . 'Action';
                $error = 'Fail';
                
                if (file_exists('../controllers/'.$controllerName.'Controller.php')){
                    require_once('../controllers/'.$controllerName.'Controller.php');
                    $controller = new $controllerName;
                    if (method_exists($controllerName,$actionName)){
                        $controller->{$actionName}($tokens[2]);
                    } else {
                        require_once('../controllers/'.'ErrorController.php');
                        $controllerName = 'Error';
                        $controller = new $controllerName;
                        $controller->indexAction();
                    }
                }else{ 
                    require_once('../controllers/'.'ErrorController.php');
                    $controllerName = 'Error';
                    $controller = new $controllerName;
                    $controller->indexAction();
                }
                

        }else{
                require_once('../controllers/'.'IndexController.php');
                $controllerName = 'Index';
                $controller = new $controllerName;
                $controller->indexAction();
        }
    }

    }

?>