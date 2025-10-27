<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('.dashboard.home');
    }

    public function analytics()
    {
        return view('dashboard.analytics');
    }

    public function ecommerce()
    {
        return view('dashboard.ecommerce');
    }

    public function email()
    {
        return view('dashboard.email');
    }

    public function socialMedia()
    {
        return view('dashboard.social-media');
    }
}
