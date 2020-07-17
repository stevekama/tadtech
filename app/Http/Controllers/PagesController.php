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
        $page = ucfirst('shop');
        
        return view('pages.shop')->with('page', $page);
    }

    public function cart()
    {
        $page = ucfirst('cart');
        return view('pages.cart')->with('page', $page);
    }

    public function contact()
    {
        $page = ucfirst('contact');
        return view('pages.contact')->with('page', $page);
    }
}
