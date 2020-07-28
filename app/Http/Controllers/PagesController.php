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
        $products = Products::orderBy('id', 'desc')->paginate(10);
        return view('pages.shop')->with('page', $page)->with('categories', $categories)->with('products', $products);
    }

    public function category($id)
    {
        $page = ucfirst('shop');
        $categories = Categories::orderBy('id', 'desc')->get();
        $category = Categories::find($id);
        $products = Products::where('category_id', $category->id)->paginate(10);
        return view('pages.product_categories')->with('page', $page)->with('categories', $categories)->with('products', $products);
    }

    public function product($id)
    {
        $page = ucfirst('product');
        $categories = Categories::orderBy('id', 'desc')->get();
        $products = Products::orderBy('id', 'desc')->get();
        $product = Products::find($id);
        return view('pages.product_details')->with('page', $page)->with('categories', $categories)->with('product', $product)->with('products', $products);
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
