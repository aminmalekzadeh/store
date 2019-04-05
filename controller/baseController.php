<?php

class baseController{
    protected $pdo;

    function __construct()
    {
        $conn = new connection();
        $this->pdo = $conn->myPDO;
    }
}