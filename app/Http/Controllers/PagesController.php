<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function cart()
    {
        return view('pages.cart');
    }
}
