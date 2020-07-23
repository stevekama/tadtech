@extends('layouts.config')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$product->product_name}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            view
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">
                            {{$product->product_name}}
                        </h3>
                        <div class="col-12">
                            <img src="/storage/images/products/{{$product->product_image}}" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb active">
                                <img src="/storage/images/products/{{$product->product_image}}" alt="Product Image">
                            </div>
            
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{$product->product_name}}</h3>
                        <p>Units: {{$product->product_units}}</p>
                        <hr>
                        
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                Kshs.{{$product->product_price}}
                            </h2>
                        </div>

                        <div class="mt-4">
                            <a href="/products/{{$product->id}}/edit" class="btn btn-primary btn-lg btn-flat">
                                <i class="fa fa-edit fa-lg mr-2"></i> 
                                Edit
                            </a>

                            <form action="/products/{{$product->id}}" method="POST" class="pull-right">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-lg btn-flat">
                                    <i class="fa fa-trash fa-lg mr-2"></i>  Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                            {{$product->product_description}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
    
@endsection