<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = ucfirst('categories');
        $categories = Categories::orderBy('id', 'desc')->paginate(10);
        return view('categories.index')->with('page', $page)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = ucfirst('categories');
        return view('categories.create')->with('page', $page);
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
            'category' => 'required',
            'category_image' => 'image|nullable'
        ]);

        // Handle file upload
        if($request->hasFile('category_image')){
            // get filename with the extension 
            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            // get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('category_image')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename."_".time().".".$extension;
            // Upload the image
            $path = $request->file("category_image")->storeAs('public/images/categories', $fileNameToStore);
        }else {
            $fileNameToStore = "noimage.png";
        }

        // create category 
        $category = new Categories();
        $category->category = $request->input('category');
        $category->category_icon = 'fa-list';
        $category->category_image = $fileNameToStore;
        $category->save();

        // redirect 
        return redirect('/categories')->with('success', 'Category Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = ucfirst('categories');
        $category = Categories::find($id);
        return view('categories.edit')->with('page', $page)->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
    **/
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required'
        ]);

        // Handle file upload
        if($request->hasFile('category_image')){
            // get filename with the extension 
            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            // get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('category_image')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename."_".time().".".$extension;
            // Upload the image
            $path = $request->file("category_image")->storeAs('public/images/categories', $fileNameToStore);
        }

        // create category 
        $category = Categories::find($id);
        $category->category = $request->input('category');
        $category->category_icon = 'fa-list';
        if($request->hasFile('category_image')){
            $category->category_image = $fileNameToStore;
        }
        $category->save();

        // redirect 
        return redirect('/categories')->with('success', 'Category Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::find($id);

        if($category->category_image != "noimage.png"){
            // Delete the image
            Storage::delete('public/storage/images/categories/'.$category->category_image);
        }

        $category->delete();
        
        // redirect
        return redirect('/categories')->with('success', 'Category successfully deleted');
    }
}
