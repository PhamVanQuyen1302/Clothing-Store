@extends('layouts.client')
@section('title')
    Giỏ hàng
@endsection
@section('content')
    <section class="bread_crumb py-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="/"><span>Trang chủ</span></a>
                        </li>
                        <li><strong>Giỏ hàng</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="main-cart-page main-container col1-layout">
        <div class="main container hidden-xs">
            <h1 class="title-head hidden page_title">Giỏ hàng</h1>
            <div class="col-main cart_desktop_page cart-page">

                <div class="cart page_cart hidden-xs" id="page_cart">

                    @if (session('cart') && session('cart') != [])
                        @php
                            $cart = session('cart');
                        @endphp
                        @foreach ($cart as $item)
                            <div class="margin-bottom-0">
                                <div class="bg-scroll">
                                    <div class="cart-thead">
                                        <div style="width: 19%; ">Sản phẩm</div>
                                        <div style="width: 28%;padding-left: 5px;"><span class="nobr">Thông tin sản
                                                phẩm</span></div>
                                        <div style="width: 17%" class="a-center"><span class="nobr">Đơn giá</span></div>
                                        <div style="width: 18%" class="a-center">Số lượng</div>
                                        <div style="width: 13%;" class="a-center">Thành tiền</div>
                                        <div style="width: 5%" class="a-center">Xóa</div>
                                    </div>
                                    <div class="cart-tbody">

                                        <div class="item-cart cartItem_37834033" psId="37834033">
                                            <div style="width: 19%" class="image">
                                                <a href="/giay-nike-air-force-1-low-shadow-sunset-pulse-w-40-p37834033.html"
                                                    class="product-image" title="{{ $item['name'] }}">
                                                    @foreach ($item['image'] as $image)
                                                        <img src="{{ Storage::url($image->link_image) }}" width="120"
                                                            height="auto" alt="{{ $item['name'] }}">
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div style="width: 28%;align-items: flex-start;" class="a-center">
                                                <h2 class="product-name">
                                                    <a class="tp_product_name"
                                                        href="{{ route('home.detail', $item['id']) }}">{{ $item['name'] }}</a>
                                                </h2>
                                            </div>
                                            <div style="width: 17%" class="a-center">
                                                <span class="item-price">
                                                    <span class="price tp_product_price"
                                                        value="2990000">{{ number_format($item['price']) }}</span>
                                                </span>
                                            </div>
                                            <div style="width: 18%" class="a-center">
                                                <div class="input_qty_pr relative ">
                                                    <button class="reduced_pop items-count btn-minus"
                                                        type="button">–</button>
                                                    <input type="text" maxlength="12" min="1" max="5000"
                                                        value="{{ $item['quantity'] }}" class="input-text number-sidebar"
                                                        psId="37834033" size="4" value="2">
                                                    <button class="increase_pop items-count btn-plus"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                            <div style="width: 13%;" class="a-center">
                                                <span class="cart-price">
                                                    <span
                                                        class="price">{{ number_format($item['price'] * $item['quantity']) }}
                                                        đ</span> </span>
                                            </div>
                                            <div style="width: 5%" class="a-center">
                                                <a class="button remove-item remove-item-cart" title="Xóa">
                                                    <span id="dele-cart" data-id="{{ $item['id'] }}"><i
                                                            class="fas fa-trash-alt"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning">
                            <p>Chưa có sản phẩm nào !!</p>
                        </div>
                    @endif
                    <div class="cart-collaterals cart_submit row">
                        <div class="totals col-sm-12 col-md-12 col-xs-12">
                            <div class="totals">
                                <div class="inner">
                                    <ul class="checkout">
                                        <li class="clearfix">
                                            <div class="inline-block">
                                                <span>Tổng tiền:</span>
                                                <strong>
                                                    @if (session('cart') && session('cart') != [])
                                                        <span class="totals_price price">
                                                            {{ number_format($item['price'] * $item['quantity']) }}
                                                        </span>
                                                    @endif
                                                </strong>
                                            </div>
                                            <button onclick="window.location.href='{{ route('cart.save') }}'" type="button"
                                                class="tp_button btn btn-primary button btn-proceed-checkout f-right"
                                                title="Tiến hành thanh toán">
                                                <span style=" text-transform: initial;">Tiến hành thanh toán</span>
                                            </button>
                                            <a href="/" class="btn btn-gray margin-right-15 f-right tp_button"
                                                title="Tiếp tục mua hàng">
                                                <span style=" text-transform: initial; ">Tiếp tục mua hàng</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="cart-mobile hidden-md hidden-lg hidden-sm">
            <div class="margin-bottom-0">
                <div class="header-cart" style="background:#fff;">
                    <div class="title-cart">
                        <h3>Giỏ hàng của bạn</h3>
                    </div>
                </div>
                <div class="header-cart-content" style="background:#fff;">
                    <div class="cart_page_mobile content-product-list">
                        <div class="item-product item cartItem_37834033" psId="37834033" data-price="2990000"
                            data-discount="0">
                            <div class="item-product-cart-mobile">
                                <a href="/giay-nike-air-force-1-low-shadow-sunset-pulse-w-40-p37834033.html"
                                    class="product-images1"
                                    title="Giày Nike Air Force 1 Low Shadow Sunset Pulse (W) - 40">
                                    <img src="https://pos.nvncdn.com/5a10ca-97757/ps/20220316_fwkrcbLQx6wOz04e0TqDcAG3.jpeg"
                                        alt="Giày Nike Air Force 1 Low Shadow Sunset Pulse (W) - 40">
                                </a>
                            </div>
                            <div class="title-product-cart-mobile">
                                <h3><a href="/giay-nike-air-force-1-low-shadow-sunset-pulse-w-40-p37834033.html"
                                        title="Giày Nike Air Force 1 Low Shadow Sunset Pulse (W) - 40">Giày Nike Air
                                        Force 1 Low Shadow Sunset Pulse (W) - 40</a></h3>
                                <p>Giá: <span rel="price">5,980,000₫</span></p>
                            </div>
                            <div class="select-item-qty-mobile">
                                <div class="txt_center">
                                    <button class="reduced items-count btn-minus" type="button">–</button>
                                    <input type="text" maxlength="12" min="1" max="5000"
                                        class="input-text number-sidebar" psId="37834033" size="4" value="2">
                                    <button class="increase items-count btn-plus" type="button">+</button>
                                </div>
                                <a class="button remove-item remove-item-cart" href="javascript:void(0);"
                                    psId="37834033">
                                    Xoá </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart-price" style="">
                        <div class="title-cart ">
                            <h3 class="text-xs-left">Tổng tiền</h3>
                            <a class="text-xs-right totals_price_mobile">5,980,000₫</a>
                        </div>
                        <div class="checkout">
                            <button onclick="window.location.href='/cart/checkout'" type="button"
                                class="tp_button btn-proceed-checkout-mobile">
                                <span>Tiến hành thanh toán</span>
                            </button>
                            <button onclick="window.location.href='/'"
                                class="tp_button btn-proceed-checkout-mobile margin-top-10">
                                <span>Tiếp tục mua hàng</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Style>
        .bannercategory .box-sport-content img {
            width: 100%;
            -webkit-transition: all 10s;
            transition: all 4s;
        }
    </style>
    <style>
        .main-whynote {
            background: #f2f2f2;
            padding: 100px 0 30px;
            position: relative;
            transition: all 4s;
        }
    </style>
    <style>
        img {
            max-width: 100%;
            object-fit: scale-down;
            transition: all 4s;
        }

        .main-whynote .box-why-note .title-why h2 a {
            color: #de0000;
            transition: all 4s;
        }
    </style>
    <style>
        #nav-menu .main-nav-menu .menu__list--top>li:hover>a {
            background: #de101d;
            color: #fff;
            opacity: 70%;
        }

        #nav-menu .main-nav-menu .menu__list--top>li>a {
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
            color: #000000;
            font-weight: 700;
            text-transform: uppercase;
            -webkit-transition: all .3s;
            transition: all .3s;
        }
    </style>
    <style>
        .bannercategory {
            background: #f2f2f2;
            padding-bottom: 40px;
            padding-top: 6rem;
        }
    </style>
    <style>
        .bannercategory .box-sport-content img {
            border-radius: 10px;
            width: 100%;
            -webkit-transition: all 10s;
            transition: all 4s;
        }

        .bannercategory .box-sport-content .more {
            border-radius: 5px;
            position: absolute;
            bottom: 25px;
            left: 50%;
            -webkit-transform: translate(-50%);
            transform: translate(-50%);
            width: 170px;
            height: 40px;
            display: block;
            line-height: 40px;
            text-align: center;
            background: #fff;
            color: #000;
            font-weight: 700;
            margin: 0 auto;
            -webkit-transition: all .5s;
            transition: all .5s;
        }
    </style>
    <script>
        $(document).ready(function() {
            function deleCart(id) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post("/dele/cart", {
                    'id': id,
                    'quantity': 0
                }, function(data) {
                    $('#count-holder').load('/cart #count-holder');
                    $('#page_cart').load('/cart #page_cart');
                });
            }

            $('#dele-cart').click(function() {
                var id = $('#dele-cart').data('id');
                deleCart(id);

            });
        })
    </script>

    </html>

@endsection
