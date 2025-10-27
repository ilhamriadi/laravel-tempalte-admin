<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function chat()
    {
        return view('apps.chat');
    }

    public function mailbox()
    {
        return view('apps.mailbox');
    }

    public function calendar()
    {
        return view('apps.calendar');
    }
}
