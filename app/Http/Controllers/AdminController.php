<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function mesas()
    {
        return view('admin.mesas');
    }

    public function pedidos()
    {
        return view('admin.pedidos');
    }

    public function facturas()
    {
        return view('admin.facturas');
    }
}
