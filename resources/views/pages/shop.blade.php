@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/shop_background.jpg')}}"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">Shop Today</h2>
        </div>
    </div>

    <!-- Shop -->
	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								@if (count($categories) > 0)
									@foreach ($categories as $category)
										<li>
											<a href="/shop/categories/{{$category->id}}">
												 {{$category->category}}
											</a>
										</li>
									@endforeach
								@else
									<li>
										<a href="/">
											No Category
										</a>
									</li>	
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-9">
					<!-- Shop Content -->
					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count">
								<span>{{count($products)}}</span> products found
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							@if (count($products) > 0)
								@foreach ($products as $product)
									<!-- Product Item -->
									<div class="product_item is_new">
										<div class="product_border"></div>
										<div class="product_image d-flex flex-column align-items-center justify-content-center">
											<img src="/storage/images/products/{{$product->product_image}}" alt="">
										</div>
										<div class="product_content">
											<div class="product_price">KShs.{{$product->product_price}}</div>
											<div class="product_name">
												<div>
													<a href="/shop/product/{{$product->id}}" tabindex="0">
														{{$product->product_name}}
													</a>
												</div>
											</div>
										</div>
										<div class="product_fav">
											<i class="fa fa-heart"></i>
										</div>
										<ul class="product_marks">
											<li class="product_mark product_new">
												{{$product->product_status}}
											</li>
										</ul>
									</div>
								@endforeach
							@else
								<!-- Product Item -->
								<div class="product_item discount">
									<div class="product_border"></div>
									<div class="product_image d-flex flex-column align-items-center justify-content-center">
										<img src="{{asset('storage/images/products/noimage.png')}}" alt="">
									</div>
									<div class="product_content">
										{{-- <div class="product_price">$225</div> --}}
										<div class="product_name">
											<div>
												<a href="#" tabindex="0">
													Welcome TadTech
												</a>
											</div>
										</div>
									</div>
								</div>
							@endif
							
						</div>

						<!-- Shop Page Navigation -->
						<div class="shop_page_nav d-flex flex-row">
							{{$products->links()}}
						</div>

					</div>

				</div>
			</div>
		</div>
    </div>
@endsection