<?php

declare(strict_type=1);

namespance dolpon/library/mysql

use dolpon/library/mysql/DbAbstruct;

class mysql
{

    public static $db;
  
    protected $host;

    protected $port;

    protected $dbname;

    protected $user;

    protected $password;

    protected $driver;

    public function __construct($host, $prot, $dbname, $user, $password, $driver)
    {
       	$this->host 	= $host;
        $this->prot 	= $prot;
	$this->dbname   = $dbname;
        $this->user 	= $user;
        $this->password = $password;
        $this->driver 	= $driver;
        $db =  $this->conn();
        return $db;
    }
    
    /*
     * 数据库连接方法
     *
     *
     */
    public function conn()
    { 
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
	if($this->db != null) {
	    return $this->db;
	}
        $this->db = new PDO($dsn, $user, $password);
        return $this->db;
        		
    }	

    public function excute($sql)
    {
        return $this->db->exec($sql);

    }

    public function find($sql)
    {
	return $this->db->query($sql);
    }

    public function findOne()
    {

    }


}
