<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
                       <li class="nav-item has-treeview menu-open">
                        <a href="{{ route('backend.dashboard') }}" class="nav-link active">
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
                    <li class="nav-item has-treeview">
                        <a href="{{ route('backend.product.index') }}" class="nav-link">
                            <i class='fab fa-accusoft'></i>
                            <p>
                                Quản lý sản phẩm
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.product.create') }}" class="nav-link">
                                    <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.product.index') }}" class="nav-link">
                                    <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                    <p>Danh sách</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('backend.category.index') }}" class="nav-link">
                            <i class='fas fa-list-alt'></i>
                            <p>
                                Quản lý danh mục
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.category.create') }}" class="nav-link">
                                    <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.category.index') }}" class="nav-link">
                                    <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('backend.category.index') }}" class="nav-link">
                        <i class='fas fa-award'></i>
                        <p>
                            Quản lý thương hiệu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.trademark.create') }}" class="nav-link">
                                <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                <p>Tạo mới</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.trademark.index') }}" class="nav-link">
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
                    <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                        <a href="{{ route('backend.user.index') }}" class="nav-link">
                            <i class='fas fa-address-card'></i>
                            <p>
                                Quản lý người dùng
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.user.create') }}" class="nav-link">
                                    <span style="margin-left: 25px"><i class='far fa-edit'></i></span>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.user.index') }}" class="nav-link">
                                    <span style="margin-left: 25px"><i class='fas fa-list-ul'></i></span>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('backend.user.account',['id' => \Illuminate\Support\Facades\Auth::user()->id]) }}" class="nav-link">
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
                    <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                        <a href="{{route('backend.order.index')}}" class="nav-link">
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
                <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                    <a href="" class="nav-link">
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
                <li class="nav-item has-treeview" @cannot('view', \Illuminate\Support\Facades\Auth::user()) hidden @endcannot>
                    <a href="" class="nav-link">
                        <i class='far fa-clone'></i>
                        <p>
                            Quản lý giao diện
                        </p>
                    </a>
                </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
