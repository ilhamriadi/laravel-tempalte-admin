<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AccountController extends Controller
{
    public function profileDetail()
    {
        return view('pages.account-profile');
    }
}
