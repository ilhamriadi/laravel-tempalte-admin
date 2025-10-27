<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function list()
    {
        return view('invoices.list');
    }

    public function addNew()
    {
        return view('invoices.add-new');
    }

    public function overview()
    {
        return view('invoices.overview');
    }
}
