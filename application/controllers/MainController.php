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
            'array' => [1, 2, 3],

        ];

        $db = new Db;
        $form = '1,DELETE from users';
        $params = [
            'id' => $form,
        ];
        $data = $db->column('SELECT name FROM users WHERE id = :id', $params);
        debug($data);
        $this->view->render('mainPage', $vars);
    }


}