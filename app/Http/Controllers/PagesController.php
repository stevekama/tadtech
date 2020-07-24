<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categories;
use App\Products;

class PagesController extends Controller
{
    public function index(){
        $page = ucfirst('home');
        $categories = Categories::orderBy('id', 'desc')->get();

        $query = "SELECT ";
        $query .= "products.id, products.product_name, ";
        $query .= "products.product_image, product_details, products.product_price, ";
        $query .= "products.product_status, categories.category ";
        $query .= "FROM products ";
        $query .= "INNER JOIN categories ON products.category_id = categories.id";
        $products = DB::select($query);

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
