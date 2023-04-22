<?php

// require_once '../Models/DataBaseModel.php';

class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'login';
        $this->user = 'root';
        $this->password = 'root';
        $this->charset = 'utfmb4';
    }

    public function connect()
    {
        $con = new mysqli($this->host, $this->user, $this->password, $this->db);
        return $con;
    }
}