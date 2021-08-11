@php
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\Route;

    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('frontend.home')}}" class="brand-link">
        <img src="/frontend/images/logo.png"
        style="opacity: .8">
{{--        <span class="brand-text font-weight-light">HD</span>--}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/storage/{{ \Illuminate\Support\Facades\Auth::User()->avatar }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::User()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                       <li class="nav-item has-treeview {{($prefix == '/admin')?'menu-open':''}}">
                        <a href="{{ route('backend.dashboard') }}" class="nav-link {{($route=='backend.dashboard')?'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Trang chủ
                            </p>
                        </a>

                    </li>
                <li class="nav-item has-treeview">
                    <a href="" class="">
                        <p style="margin-bottom: 5px;  padding-top: 10px">
                            Sản phẩm
                        </p>
                    </a>
                </li>
                    <li class="nav-item has-treeview  {{($prefix == 'admin/products')?'menu-open':''}}">
                        <a href="{{ route('backend.product.index') }}" class="nav-link">
                            <i class='fab fa-accusoft'></i>
                            <p>
                                Quản lý sản phẩm
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.product.create') }}" class="nav-link {{($route=='backend.category.index')?'active':''}}">
                                    <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.product.index') }}" class="nav-link {{($route=='backend.product.index')?'active':''}}">
                                    <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                    <p>Danh sách</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{($prefix == 'admin/categories')?'menu-open':''}}">
                        <a href="{{ route('backend.category.index') }}" class="nav-link">
                            <i class='fas fa-list-alt'></i>
                            <p>
                                Quản lý danh mục
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.category.create') }}" class="nav-link {{($route=='backend.category.create')?'active':''}}">
                                    <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.category.index') }}" class="nav-link {{($route=='backend.category.index')?'active':''}}">
                                    <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item has-treeview {{($prefix == 'admin/trademarks')?'menu-open':''}}">
                    <a href="{{ route('backend.category.index') }}" class="nav-link">
                        <i class='fas fa-award'></i>
                        <p>
                            Quản lý thương hiệu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.trademark.create') }}" class="nav-link {{($route=='backend.trademark.create')?'active':''}}">
                                <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                <p>Tạo mới</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.trademark.index') }}" class="nav-link {{($route=='backend.trademark.index')?'active':''}}">
                                <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                <p>Danh sách</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="">
                        <p style="margin-bottom: 5px;  padding-top: 10px">
                           Người dùng
                        </p>
                    </a>
                </li>
                    <li class="nav-item has-treeview {{($prefix == 'admin/users')?'menu-open':''}}" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                        <a href="{{ route('backend.user.index') }}" class="nav-link">
                            <i class='fas fa-address-card'></i>
                            <p>
                                Quản lý người dùng
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.user.create') }}" class="nav-link {{($route=='backend.user.create')?'active':''}}">
                                    <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.user.index') }}" class="nav-link {{($route=='backend.user.index')?'active':''}}">
                                    <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item has-treeview ">
                    <a href="{{ route('backend.user.account',['id' => \Illuminate\Support\Facades\Auth::user()->id]) }}" class="nav-link{{($route=='backend.user.account')?'active':''}}">
                        <i class='far fa-address-book'></i>
                        <p>
                            Quản lý tài khoản
                        </p>
                    </a>
                </li>
                    <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                        <a href="" class="">
                            <p style="margin-bottom: 5px; padding-top: 10px">
                                Đơn hàng
                            </p>
                        </a>
                    </li>
                    <li class=" nav-item has-treeview {{($prefix == 'admin/orders')?'menu-open':''}} " @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                        <a href="{{route('backend.order.index')}}" class="nav-link {{($route=='backend.order.index')?'active':''}}">
                            <i class='fas fa-shopping-cart'></i>
                            <p>
                                Quản lý đơn hàng
                            </p>
                        </a>
                    </li>
                <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                    <a href="" class="">
                        <p style="margin-bottom: 5px; padding-top: 10px">
                           Thống kê
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{($prefix == 'admin/statisticals')?'menu-open':''}}" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                    <a href="{{route('backend.statistical.index')}}" class="nav-link" {{($route=='backend.statistical.index')?'active':''}}>
                        <i class='fas fa-chart-area'></i>
                        <p>
                            Thống kê
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                    <a href="" class="">
                        <p style="margin-bottom: 5px;  padding-top: 10px">
                            Giao diện
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{($prefix == 'admin/home')?'menu-open':''}}" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                    <a href="{{ route('backend.home.index') }}" class="nav-link">
                        <i class='far fa-clone'></i>
                        <p>
                            Quản lý giao diện
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.home.create') }}" class="nav-link {{($route=='backend.home.create')?'active':''}}">
                                <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                <p>Tạo mới</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.home.index') }}" class="nav-link {{($route=='backend.home.index')?'active':''}}">
                                <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                <p>Danh sách</p>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
