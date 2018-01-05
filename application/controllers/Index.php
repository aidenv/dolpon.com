<?php

declare(strict_types=1);

use mysql\mysql as db;

class IndexController extends BaseController {
  
    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {

	    $this->getView()->assign("content", "hello world");
    } 
}
