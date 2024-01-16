<?php

namespace Application\Controllers;

use Ascmvc\Mvc\Controller;

class DocsController extends Controller
{
    public function indexAction($vars = null)
    {
        $this->view['bodyjs'] = 1;
        
        $this->view['templatefile'] = '/docs';
        
        return $this->view;
    }
}
