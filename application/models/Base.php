<?php

use mysql\mysql as db;

class BaseModel
{

    /**
     * mysql result
     * @var db
     */
    protected static $mysql;

    public function __construct()
    {
        $mysqlConfig    = Yaf_Application::app()->getConfig();
        $localhost      = $mysqlConfig->get('mysql')->get('localhost');
        $port           = $mysqlConfig->get('mysql')->get('port');
        $dbName         = $mysqlConfig->get('mysql')->get('dbname');
        $user           = $mysqlConfig->get('mysql')->get('user');
        $password       = $mysqlConfig->get('mysql')->get('password');
        $driver         = $mysqlConfig->get('mysql')->get('driver');

        self::$mysql = new db($localhost, $port, $dbName, $user, $password, $driver);
    }
}

