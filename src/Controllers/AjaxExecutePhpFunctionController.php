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
        require VIEWS . 'AjaxExecutePhpFunction/accueil.php';;
    }

    // Example Function
    public function example()
    {
        $this->validator->validate([
            "test" => ["required"]
        ]);

        if (!$this->validator->errors()) {

        } else {

        }
    }
}