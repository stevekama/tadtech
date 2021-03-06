@extends('layouts.config')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Products</a></li>
                    <li class="breadcrumb-item active">New Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                New Product
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="/products" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option disabled selected>Choose Category</option>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->category}}
                                                </option>
                                            @endforeach
                                        @else
                                            <option disabled>No Category</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product_name">Product</label>
                                    <input type="text" class="form-control" placeholder="Enter product name" name="product_name">
                                </div>
                                <div class="form-group">
                                    <label for="product_description">Description</label>
                                    <textarea name="product_description" placeholder="Enter Product Description" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="product_image">
                                        Product Image
                                    </label>
                                    <input type="file" id="product_image" name="product_image"/>
                                    <p class="help-block">Upload the product image here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="product_price">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter product price" name="product_price">
                                </div>
                                <div class="form-group">
                                    <label for="product_units">Units</label>
                                    <input type="text" class="form-control" placeholder="Enter product units" name="product_units">
                                </div>
                                <div class="form-group">
                                    <label for="product_details">Details</label>
                                    <textarea name="product_details" placeholder="Enter Product Details" class="form-control"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection