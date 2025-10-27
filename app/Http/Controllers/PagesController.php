<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accountSettings()
    {
        return view('pages.account-settings');
    }
    
    public function account()
    {
        return view('pages.account');
    }
}
