<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view('super-admin/index');
    }

    public function user()
    {
        return view('super-admin/user');
    }
}
