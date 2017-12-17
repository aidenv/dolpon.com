<?php

declare(strict_type=1);

use Dolpon/library/mysql/mysql as db;

class IndexController extends Yaf_Controller_Abstract {
  
    public function __construct()
    {
	 $this->db = new db('127.0.0.1', '3306', '')

    }

    public function indexAction()
   {
      
	$this->getView()->assign("content", "hello world");
   }
}
