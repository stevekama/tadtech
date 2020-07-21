<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="/" class="brand-link navbar-primary">
        <img src="{{asset('back/dist/img/AdminLTELogo.png')}}"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">TadTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('back/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Dashboard
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/vendor" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                    Categories
                    <i class="fa fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/categories" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>product categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/categories" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>service categories</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fa fa-th-list"></i>
                <p>
                    Products
                    <i class="fa fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/products" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>product list</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>service list</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">EXIT</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>