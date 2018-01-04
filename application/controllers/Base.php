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

        $mysqlConfig = Yaf_Application::app()->getConfig();


        $this->db = new db('127.0.0.1', '3306', 'szifree', 'jun', '123456', 'PDO');

    }






}