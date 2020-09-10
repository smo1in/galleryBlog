<?php

namespace application\lib;

use PDO;

class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO(
            'mysql:host=' . $config['host'] . ';
            dbname=' . $config['dbname'] . '',
            $config['user'],
            $config['password']
        );
    }

    pulic function query($sql){
        $this->db->query($sql);

}
}