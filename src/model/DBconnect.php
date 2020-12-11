<?php


namespace App\model;

use PDO;
class DBconnect extends PDO
{
    protected $username;
    protected $password;
    protected $dsn;

    public function __construct()
    {
        $this->username = 'root';
        $this->password = 'rVZ3&epKG@!DmuYQ';
        $this->dsn = 'mysql:host=localhost;dbname=quanlyhanghoa';
    }
    public function connect(){
        $connect = new PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }
}