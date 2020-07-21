<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class PagesController extends Controller
{
    public function index(){
        $page = ucfirst('home');
        $categories = Categories::orderBy('id', 'desc')->get();
        // return view('pages.index', compact('page'));
        return view('pages.index')->with('page', $page)->with('categories', $categories);
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
