<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $page = ucfirst('home');
        // return view('pages.index', compact('page'));
        return view('pages.index')->with('page', $page);
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
