<?php

declare(strict_type=1);

namespance dolpon/library/mysql

use dolpon/library/mysql/DbAbstruct;

class mysql
{

    public static $db;
  
    protected $host;

    protected $port;

    protected $user;

    protected $password;

    protected $driver;

    public function __construct($host, $prot, $user, $password, $driver)
    {
       	$this->host 	= $host;
        $this->prot 	= $prot;
        $this->user 	= $user;
        $this->password = $password;
        $this->driver 	= $driver;
        $this->conn();
    }

    public function conn()
    { 
		
    }	

    public function excute()
    {


    }

    public function find()
    {

    }

    public function findOne()
    {

    }


}
