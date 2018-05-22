<?php

namespace Dev\Bookstore\Books\Controllers;

use LaraPress\Route\BaseController;

class Sample extends BaseController
{
    public function index()
    {
        return view('sample');
    }
}