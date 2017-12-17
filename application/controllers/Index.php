<?php

declare(strict_types=1);

use mysql\mysql as db;

class IndexController extends Yaf_Controller_Abstract {
  
    public function init()
    {
	 $this->db = new db('127.0.0.1', '3306', 'szifree-online', 'root', '', 'PDO');

    }

    public function indexAction()
    {
      
	$this->getView()->assign("content", "hello world");
    } 
}
