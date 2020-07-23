@extends('layouts.config')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Categories</li>
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
                                Product Categories
                            </h3>
                            <div class="card-tools">
                                <a href="/categories/create" class="btn btn-primary">
                                    New Category
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            @if (count($categories) > 0)
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Banner</th>
                                            <th>Category</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    <img src="/storage/images/categories/{{$category->category_image}}" alt="{{$category->category}}" class="img-circle img-size-32 mr-2"/>
                                                </td>
                                                <td>{{$category->category}}</td>
                                                <td>
                                                    <a href="/categories/{{$category->id}}/edit" class="btn btn-warning btn-sm btn-flat">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="/categories/{{$category->id}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger btn-sm btn-flat">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-danger alert-dismissible">
                                    No Categories Added yet.
                                </div>
                            @endif
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{$categories->links()}}
                        </div>
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