<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function friends()
    {
        return view('social.friends');
    }

    public function event()
    {
        return view('social.event');
    }

    public function video()
    {
        return view('social.video');
    }

    public function marketPlace()
    {
        return view('social.marketplace');
    }
}
