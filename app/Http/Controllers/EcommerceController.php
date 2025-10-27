<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function cart()
    {
        return view('apps.ecommerce.cart');
    }

    public function checkOut()
    {
        return view('apps.ecommerce.checkout');
    }

    public function orders()
    {
        return view('apps.ecommerce.orders');
    }

    public function orderOverview()
    {
        return view('apps.ecommerce.order-overview');
    }

    public function sellers()
    {
        return view('apps.ecommerce.sellers');
    }
}
