<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Categories;
use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = ucfirst("products");
        $products = Products::orderBy('id', 'desc')->paginate(10);
        return view('products.index')->with('page', $page)->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::orderBy('id', 'desc')->get();
        $page = ucfirst("products");
        return view('products.create')->with('page', $page)->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'product_name' => 'required',
            'product_description'=>'required',
            'product_price' => 'required',
            'product_units' => 'required',
            'product_image' => 'image|nullable'
        ]);

        // Handle file upload 
        if($request->hasFile('product_image')){
            // get filename with the extension 
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename."_".time().".".$extension;
            // Upload the image
            $path = $request->file("product_image")->storeAs('public/images/products', $fileNameToStore);
        }else {
            $fileNameToStore = "noimage.png";
        }

        
        // create product
        $product = new Products();
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_image = $fileNameToStore;
        $product->product_price = $request->input('product_price');
        $product->product_status = "NEW";
        $product->product_units = $request->input('product_units');
        $product->product_details = $request->input('product_details');
        $product->save();
        // redirect 
        return redirect('/products')->with('success', 'Product Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = ucfirst("products");
        $product = Products::find($id);
        return view('products.show')->with('page', $page)->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = ucfirst("products");
        $categories = Categories::orderBy('id', 'desc')->get();
        $product = Products::find($id);
        return view('products.edit')->with('page', $page)->with('categories', $categories)->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'product_name' => 'required',
            'product_description'=>'required',
            'product_price' => 'required',
            'product_units' => 'required'
        ]);

        // Handle file upload 
        if($request->hasFile('product_image')){
            // get filename with the extension 
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename."_".time().".".$extension;
            // Upload the image
            $path = $request->file("product_image")->storeAs('public/images/products', $fileNameToStore);
        }
        
        // create product
        $product = Products::find($id);
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        if($request->hasFile('product_image')){
            $product->product_image = $fileNameToStore;
        }
        $product->product_price = $request->input('product_price');
        $product->product_status = "NEW";
        $product->product_units = $request->input('product_units');
        $product->product_details = $request->input('product_details');
        $product->save();
        // redirect 
        return redirect('/products')->with('success', 'Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);

        if($product->product_image != "noimage.png"){
            Storage::delete('public/storage/images/products/'.$product->product_image);
        }
        
        $product->delete();

        // redirect 
        return redirect('/products')->with('success', 'Product successfully deleted');
    }
}
