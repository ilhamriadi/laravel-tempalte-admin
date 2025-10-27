<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        return view('apps.ecommerce.products.list');
    }

    public function grid()
    {
        return view('apps.ecommerce.products.grid');
    }

    public function overview()
    {
        return view('apps.ecommerce.products.overview');
    }

    public function create()
    {
        return view('apps.ecommerce.products.create');
    }
}
