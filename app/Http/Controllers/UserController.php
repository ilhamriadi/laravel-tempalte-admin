<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        return view('user.list');
    }

    public function grid()
    {
        return view('user.grid');
    }
}
