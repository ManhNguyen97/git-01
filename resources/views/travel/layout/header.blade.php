<header class="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <ul class="list-inline">
                        <li class="hidden-sm hidden-xs">
                            <span>Chào mừng bạn đến với cửa hàng trực tuyến của chúng tôi !</span>
                        </li>
                        <li>
                            <a href="/cart">
                                <i class="fa fa-shopping-cart"></i> Giỏ hàng (<span class="cartCount count_item_pr" id="cart-total">0</span>)
                            </a>
                        </li>

                        <li>
                            <a href="/account/login" class="login_btn">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="/account/register" class="register_btn">Đăng ký</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="search f-right">
                        <div class="header_search search_form">
                            <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                                <input type="search" name="query" value="" placeholder="Tìm kiếm ... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                                <span class="input-group-btn">
    <button class="btn icon-fallback-text">
        <i class="fa fa-search"></i>
    </button>
    </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bar">
        <div class="container">
            <div class="menu-bar hidden-md hidden-lg">

                <i class=" fa fa-bars fa-lg"></i>
            </div>
            <div class="header-main">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="logo">

                            <a href="{{ url('demoweb') }}" class="logo-wrapper dp-flex">
                                <img src="{{ asset('vendor/image/logo-header.png?1649413074140') }}" alt="logo BizTravel">
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <nav>
                            <ul id="nav" class="nav f-right">


                                <li class="nav-item active"><a class="nav-link" href="{{ url('demoweb') }}">Trang chủ</a>
                                </li>



                                <li class="nav-item "><a class="nav-link" href="{{ url('demoweb/about') }}">Giới thiệu</a>
                                </li>



                                <li class="nav-item ">
                                    <a href="/collections/all" class="nav-link">
                                        <span>Sản phẩm</span>
                                        <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Du lịch Châu Á</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Du lịch Châu Âu</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Du lịch trong nước</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Du lịch trải nghiệm</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Tour trăng mật</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Vé máy bay</span>

                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Khách sạn</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Tour giá rẻ</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Tour nối bật</span>
                                            </a>

                                        </li>

                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="{{ url('demoweb/product') }}">
                                                <span>Tour khuyến mãi</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>



                                <li class="nav-item "><a class="nav-link" href="{{ url('demoweb/blog') }}">Tin tức</a>
                                </li>



                                <li class="nav-item "><a class="nav-link" href="/lien-he">Liên hệ</a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>