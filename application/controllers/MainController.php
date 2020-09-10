<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = [
            'name' => 'Person',
            'age' => 88,
            'array'=>[1,2,3],

        ];

        $db= new Db;

        $this->view->render('mainPage', $vars);
    }


}