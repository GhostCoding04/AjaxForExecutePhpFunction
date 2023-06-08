<?php

namespace AjaxExecutePhpFunction\Controllers;

use AjaxExecutePhpFunction\Models\AjaxExecutePhpFunctionManager;
use AjaxExecutePhpFunction\Validator;

/** Class Controller **/
class Controller
{
    public $manager;
    public $validator;

    public function __construct()
    {
        $this->manager = new AjaxExecutePhpFunctionManager();
        $this->validator = new Validator();
    }

}