<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;

class PagesController extends Controller
{
    public function index(){
        $page = ucfirst('home');
        $categories = Categories::orderBy('id', 'desc')->get();
        $products = Products::orderBy('id', 'desc')->get();
        return view('pages.index')->with('page', $page)->with('categories', $categories)->with('products', $products);
    }

    public function shop()
    {
        $page = ucfirst('shop');
        $categories = Categories::orderBy('id', 'desc')->get();
        return view('pages.shop')->with('page', $page)->with('categories', $categories);
    }

    public function cart()
    {
        $page = ucfirst('cart');
        $categories = Categories::orderBy('id', 'desc')->get();
        return view('pages.cart')->with('page', $page)->with('categories', $categories);
    }

    public function contact()
    {
        $page = ucfirst('contact');
        $categories = Categories::orderBy('id', 'desc')->get();
        return view('pages.contact')->with('page', $page)->with('categories', $categories);
    }
}
