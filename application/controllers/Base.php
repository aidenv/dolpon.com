<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-1-4
 * Time: 下午10:35
 */

declare(strict_types=1);

use mysql\mysql as db;

class BaseController extends Yaf_Controller_Abstract
{

    public function init()
    {

        $mysqlConfig    = Yaf_Application::app()->getConfig();
        $localhost      = $mysqlConfig->get('mysql')->get('localhost');
        $port           = $mysqlConfig->get('mysql')->get('port');
        $dbName         = $mysqlConfig->get('mysql')->get('dbname');
        $user           = $mysqlConfig->get('mysql')->get('user');
        $password       = $mysqlConfig->get('mysql')->get('password');
        $driver         = $mysqlConfig->get('mysql')->get('driver');

        $this->db = new db($localhost, $port, $dbName, $user, $password, $driver);

    }






}