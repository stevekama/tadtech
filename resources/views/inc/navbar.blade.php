<!-- Header -->
<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon">
                            <img src="{{asset('images/phone.png')}}" alt="">
                        </div>
                        +38 068 005 3570
                    </div>
                    {{-- top_bar_contact_item --}}

                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon">
                            <img src="{{asset('images/mail.png')}}" alt="">
                        </div>
                        <a href="mailto:fastsales@gmail.com">
                            fastsales@gmail.com
                        </a>
                    </div>
                    {{-- top_bar_contact_item --}}

                    <div class="top_bar_content ml-auto">
                        
                        <div class="top_bar_user">
                            <div class="user_icon">
                                <img src="{{asset('images/user.svg')}}" alt="">
                            </div>
                            <!-- Authentication Links -->
                            @guest
                                <div> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></div>
                                @if (Route::has('register'))
                                    <div><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></div>
                                @endif     
                            @else
                                
                                <div>
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li class="hassubs">
                                            <a href="#">
                                                {{ Auth::user()->name }} <i class="fa fa-chevron-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    
                                </div>

                            @endguest
                        </div>
                    </div>
                    {{-- top_bar_content ml-auto --}}
                </div>
            </div>
        </div>		
    </div>
    {{-- top_bar --}}

    <!-- Header Main -->
    <div class="header_main">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo">
                            <a href="/">
                                {{ config('app.name', 'TadTech')}}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                    <button type="submit" class="header_search_button trans_300" value="Submit">
                                        <img src="{{asset('images/search.png')}}" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist_icon">
                                <img src="{{asset('images/heart.png')}}" alt="">
                            </div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                <div class="wishlist_count">115</div>
                            </div>
                        </div>

                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="{{asset('images/cart.png')}}" alt="">
                                    <div class="cart_count"><span>10</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="#">Cart</a></div>
                                    <div class="cart_price">$85</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main_nav_content d-flex flex-row">
                        <!-- Categories Menu -->
                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">categories</div>
                            </div>

                            <ul class="cat_menu">
                                @isset($categories)
                                    @if(count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="/shop/categories/{{$category->id}}">
                                                    {{$category->category}}
                                                    <i class="fa fa-chevron-right ml-auto"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <a href="/">
                                                No Categories
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endisset
                                
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li>
                                    <a href="/">
                                        TadTech<i class="fa fa-chevron-down"></i>
                                    </a>
                                </li>

                                <li class="hassubs">
                                    <a href="#">
                                        Shop<i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/shop">
                                                Shop
                                                <i class="fa fa-chevron-down"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/contact">
                                        Contact<i class="fa fa-chevron-down"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Menu -->
    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <div class="page_menu_content">
                        
                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">
                            
                            
                            <li class="page_menu_item">
                                <a href="/">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="/shop">Shop<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Help<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="/contact">Contact us<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            
                        </ul>
                        
                        <div class="menu_contact">
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon">
                                    <img src="{{asset('images/phone_white.png')}}" alt=""></div>+38 068 005 3570</div>
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon">
                                    <img src="{{asset('images/mail_white.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
