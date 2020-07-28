@extends('layouts.app')

@section('content')

<!-- Single Product -->
<div class="single_product">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="/storage/images/products/{{$product->product_image}}">
                        <img src="/storage/images/products/{{$product->product_image}}" alt="">
                    </li>
                    {{-- <li data-image="{{asset('images/single_2.jpg')}}">
                        <img src="{{asset('images/single_2.jpg')}}" alt="">
                    </li>
                    <li data-image="{{asset('images/single_3.jpg')}}">
                        <img src="{{asset('images/single_3.jpg')}}" alt="">
                    </li> --}}
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected">
                    <img src="/storage/images/products/{{$product->product_image}}" alt="">
                </div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">Laptops</div>
                    <div class="product_name">
                        {{$product->product_name}}
                    </div>
                    <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_text">
                        <p>{{$product->product_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recently Viewed -->
<div class="viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Recently Viewed</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev">
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <div class="viewed_nav viewed_next">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </div>
                </div>

                <div class="viewed_slider_container">
                    
                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme viewed_slider">
                        
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                 <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image">
                                            <img src="/storage/images/products/{{$product->product_image}}" alt="">
                                        </div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">KShs.{{$product->product_price}}</div>
                                            <div class="viewed_name">
                                                <a href="/shop/product/{{$product->id}}">
                                                    {{$product->product_name}}
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_new">
                                                {{$product->product_status}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>      
                            @endforeach
                        @else
                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image">
                                        <img src="{{asset('storage/images/products/noimage.png')}}" alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_name">
                                            <a href="#">Welcome TO TadTech</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>  
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection