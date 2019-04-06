<?php


class connection
{
    private $host = "localhost";
    private $namedb = "market";
    private $username = "root";
    private $password = "1";
    public $myPDO;

    function __construct()
    {
        try {
            $this->myPDO = new PDO("mysql:host=$this->host;dbname=$this->namedb", $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            e($e->getMessage(), "alert-danger");
        }
    }
}

//