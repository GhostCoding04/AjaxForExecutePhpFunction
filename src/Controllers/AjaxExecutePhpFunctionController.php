<?php

namespace AjaxExecutePhpFunction\Controllers;

/** Class AjaxExecutePhpFunctionController **/
class AjaxExecutePhpFunctionController extends Controller
{
    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $comments = $this->manager->getComments();
        require VIEWS . 'AjaxExecutePhpFunction/accueil.php';;
    }

    public function addComment()
    {
        $this->manager->addComment();
    }
}