@extends('layouts.config')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Physical</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
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
                                Physical Products
                            </h3>
                            <div class="card-tools">
                                <a href="/products/create" class="btn btn-primary">
                                    New Product
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            @if (count($products) > 0)
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Units</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    image
                                                </td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->category_id}}</td>
                                                <td>{{$product->product_price}}</td>
                                                <td>{{$product->product_status}}</td>
                                                <td>{{$product->product_units}}</td>
                                                <td>
                                                    <a href="/products/{{$product->id}}" class="btn btn-info btn-sm btn-flat">
                                                        View
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-danger alert-dismissible">
                                    No products Added yet.
                                </div>
                            @endif
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{$products->links()}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    <!-- /.content -->
@endsection