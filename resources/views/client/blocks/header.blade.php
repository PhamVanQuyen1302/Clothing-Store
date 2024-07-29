<div id="header__desktop">
    <div id="topbar" class="topbar hidden-sm hidden-xs tp_header">
        <div class="container">
            <div class="row">
                <div class="topbar-left col-md-4">
                    <ul>
                        <li class="header-hotline">
                            <a href="tel:" class="load-scale">
                                Hotline:
                                <b></b>
                            </a>
                            <b>
                                <a href="tel:0358247638" style="color: #cc0101;">0358247638</a>
                            </b>
                        </li>

                    </ul>
                </div>
                <div class="topbar-right col-md-8">
                    <div class="header-wrap-icon">
                        <div class="search-box hidden-sm hidden-xs wpo-wrapper-search hidden">
                            <form id="searchauto" action="/search"
                                class="searchform searchform-categoris ultimate-search navbar-form">

                                <div class="wpo-search-inner form-group">
                                    <input id="inputSearchAuto" name="q" maxlength="40" autocomplete="off"
                                        class="searchinput input-search search-input" type="text" size="20"
                                        placeholder="Tìm kiếm sản phẩm">
                                </div>
                                <button type="submit" class="icon-search btn" id="search-header-btn">
                                    <span class="search-menu" aria-hidden="true">
                                        <img src="https://web.nvnstatic.net/tp/T0320/img/icon-header-3.png?v=3"
                                            alt="cart">
                                    </span>
                                </button>
                            </form>
                        </div>
                        <div class="group-icon right_header">
                            <div class="hidden-xs hidden-sm group-icon">
                                <div id="site-search-handle" class="icon-search" aria-label="Open search"
                                    title="Tìm kiếm">
                                    <div class="header_search search_form">
                                        <form class="input-group search-bar search_form" action="/search" method="get"
                                            role="search">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary icon-fallback-text">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </span>
                                            <input type="search" name="q" value=""
                                                placeholder="Tìm kiếm sản phẩm"
                                                class="input-group-field st-default-search-input search-text auto-search">
                                        </form>
                                        <div class="searchFolding searchFolding-pc"></div>
                                    </div>
                                </div>
                                @if (session('id'))
                                    <div id="site-account-handle" class="icon-account" aria-label="Open account"
                                        title="Tài khoản">
                                        <a href="/{{ session('id') }}/user-infor">
                                            <span class="account-menu" aria-hidden="true">
                                                <img src="{{ Storage::url(session('avatar')) }}">
                                                {{ session('name') }}
                                            </span>
                                        </a>/
                                        <a href="/auth/logout">
                                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                            <span class="account-menu" aria-hidden="true">
                                                Đăng xuất
                                            </span>
                                        </a>
                                    </div>
                                @else
                                    <div id="site-account-handle" class="icon-account" aria-label="Open account"
                                        title="Tài khoản">
                                        <a href="/auth/login" title="Đăng nhập">
                                            <span class="account-menu" aria-hidden="true">
                                                <img src="https://web.nvnstatic.net/tp/T0320/img/icon-header-1.png?v=3"
                                                    alt="cart">
                                                Đăng nhập
                                            </span>
                                        </a>
                                        <a href="/auth/register" title="Đăng ký">
                                            <span class="account-menu" aria-hidden="true">
                                                Đăng ký
                                            </span>
                                        </a>
                                    </div>
                                @endif


                                @php
                                    $quantity = 0;

                                    if (session('cart')) {
                                        $cart = session('cart');
                                        foreach ($cart as $item) {
                                            $quantity += $item['quantity'];
                                        }
                                    }
                                @endphp

                                <div id="site-cart-handle" class="icon-cart" aria-label="Open cart" title="Giỏ hàng">
                                    <a href="{{ route('cart.list') }}">
                                        <span class="cart-menu" aria-hidden="true">
                                            <i class="far fa-shopping-cart"></i>
                                            <span class="count-holder">
                                                <span class="count">({{ $quantity }})</span>
                                            </span>
                                        </span>
                                    </a>
                                    <div class="loadBodyCart"></div>
                                </div>
                                <div class="language_list">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="site-header" class="main-header tp_header">
        <div class="container">
            <div class="header-top wrap-flex-align">
                <div class="wrap-logo hidden-xs hidden-sm">
                    <a href="/" title="Logo">
                        <img style="max-width: 200px" alt="Logo" src="../../assets/img/nhanh (1).png" />
                    </a>
                </div>
                @php
                    use App\Models\Category;
                    $categories = Category::query()->get();
                @endphp
                <div class="hidden-xs hidden-sm">
                    <div id="nav-menu">
                        <nav role="navigation" class="main-nav-menu">
                            <ul class="menu__list menu__list--top tp_menu">
                                <li class="menu__item mega tp_menu_item"><a href="/" title="Trang chủ"
                                        class="menu__link">Trang chủ</a></li>
                                @foreach ($categories as $item)
                                    <li class="menu__item mega tp_menu_item">
                                        <a href="{{ route('fillter.index',$item->id) }}" title="Giày Adidas"
                                            class="menu__link">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach



                                <li class="menu__item mega tp_menu_item"><a href="/tin-tuc" title="Tin tức chung"
                                        class="menu__link">Tin tức chung</a></li>
                                <li class="menu__item mega tp_menu_item"><a href="/lien-he" title="Liên hệ"
                                        class="menu__link">Liên
                                        hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-wrap-icon">
                    <div class="search-box hidden-sm hidden-xs wpo-wrapper-search hidden">
                        <form action="/search" class="searchform searchform-categoris ultimate-search navbar-form">

                            <div class="wpo-search-inner form-group">
                                <input name="q" maxlength="40" autocomplete="off"
                                    class="searchinput input-search search-input" type="text" size="20"
                                    placeholder="Tìm kiếm sản phẩm">

                            </div>
                            <button type="submit" class="icon-search btn">
                                <span class="search-menu" aria-hidden="true">
                                    <img src="https://web.nvnstatic.net/tp/T0320/img/icon-header-3.png?v=3"
                                        alt="cart">
                                </span>
                            </button>
                        </form>
                    </div>
                    <div class="group-icon">
                        <div class="col-sm-12 col-xs-12 hidden-lg hidden-md header_mobile">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3 group-icon iconLogo">
                                    <img src="https://web.nvnstatic.net/tp/T0320/img/menu-bar.png?v=3" alt="menu bar">
                                </div>
                                <div class="col-sm-4 col-xs-6" style="text-align: center;">
                                    <div class="wrap-logo">
                                        <a href="/" title="Logo">
                                            <img style="max-width: 130px" alt="Logo" src="/img/nhanh.png" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-xs-3 group-icon iconSearch">
                                    <span id="site-cart-handle" class="icon-cart" aria-label="Open cart"
                                        title="Giỏ hàng">
                                        <a href="/cart">

                                            <span class="cart-menu" aria-hidden="true">
                                                <span class="count-holder" id="count-holder">
                                                    <span class="count">0</span>
                                                </span>
                                            </span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
</div>
