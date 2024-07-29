@extends('layouts.client')
@section('title')
    Bộ lọc sản phẩm
@endsection

@section('content')

    <body class="tp_background tp_text_color">


        <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0320/js/category.js?v=3"></script>
        <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0320/css/category.css?v=2" type="text/css">
        <link rel="canonical" href="/giay-nike-pc569762.html" />
        <main class="tp_product_category">
            <div id="collection" class="collection-page">
                <div class="main-content clearfix">
                    <div class="breadcrumb-shop">
                        <div class="container">
                            <div class="padding-lf-40 clearfix">
                                <div class=" ">
                                    <ol class="breadcrumb breadcrumb-arrows clearfix">
                                        <li><a href="/" target="_self"><i class="fas fa-home"></i> Trang chủ</a></li>

                                        <li class="active" style="color: red"><span>{{ $model->name }}</span>
                                        </li>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container wow fadeIn">
                <div class="row site-fixed">
                    <div class="filter-head col-sm-12 hidden-md hidden-lg">
                        <div class="btn-filter">
                            <a class="filter-btn btn">Lọc sản phẩm</a>
                        </div>
                    </div>
                    <div class="collection-option-filter col-lg-20 col-sm-3">
                        <div class="scroll-top">
                            <ul class="main_item_left main_item_cat tp_product_category group-filter" aria-expanded="true">
                                <div class="layered_subtitle dropdown-filter">
                                    <span class="tp_title">Danh mục sản phẩm</span>
                                    <span class="icon-control"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="catalog_filters filter-tag layered-content">
                                    @foreach ($categories as $item)
                                        <li class="item {{ $item->id == $currentId ? 'active' : '' }}"
                                            item-expanded="fasle">
                                            <a href="{{ route('fillter.index', $item->id) }}">{{ $item->name }}</a>
                                            <span class="icon-up"></span>
                                        </li>
                                    @endforeach


                                </div>
                            </ul>
                            <ul class="main_item_left price-filter tp_product_category_filter_price">
                                <li class="item active first group-filter filterPrice" aria-expanded="true">
                                    <div class="layered_subtitle dropdown-filter">
                                        <span class="tp_title">Giá</span>
                                        <span class="icon-control"><i class="fas fa-minus"></i></span>
                                    </div>
                                    <div class="layered-content bl-filter tag-filter-group" data-column="price">
                                        <div class="price_slider_wrapper">
                                            <div id="slider-range"></div>
                                            <span class="text-green mt-2 d-block"
                                                style="font-size: 13px;display: block;padding-top: 10px">
                                                <span id="price_form" data-size="0">
                                                    0đ
                                                </span> -
                                                <span id="price_to" data-size="5000000" data-max="5000000">
                                                    5,000,000đ
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="main_item_left size-left tp_product_category_filter_attribute">
                                <li class="item active first group-filter" aria-expanded="true">
                                    <div class="layered_subtitle dropdown-filter">
                                        <span class="tp_title">Kích thước</span>
                                        <span class="icon-control">
                                            <i class="fas fa-minus"></i>
                                        </span>
                                    </div>

                                    <div class="catalog_filters filter-tag layered-content">
                                        <ul class="boots check-box-list">
                                            {{-- @dd($getSizeByIdCategory) --}}
                                            {{-- @foreach ($getSizeByIdCategory as $item)
                                                <li class="advanced-filter">
                                                    <input type="checkbox" class="input-checkbox sizes"
                                                        value="{{ $item['size'] }}">
                                                    <label for="">{{ $item['size'] }}</label>
                                                </li>
                                            @endforeach --}}
                                        </ul>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div id="product-lists" class="product-item col-lg-80 col-sm-12 col-md-9 ">
                        <div class="top-category">
                            {{-- @foreach ($categoriesFist as $categoryName)
                                <div class="row-fluid in-category-name">
                                    <h1 class="main-category-name"><span>{{ $categoryName['name'] }}</span></h1>
                                </div>
                            @endforeach --}}
                            <div class="catalog_filters filter-tag hidden-sm hidden-xs">
                                <div class="browse-tags clearfix">
                                    <span class="text-top-c">Hiển thị 15 trong 15 kết quả</span>
                                    <span class="option-c">
                                        <select onchange="location = this.value;"
                                            class="sort-by custom-dropdown__select custom-dropdown__select--white"
                                            name="pageSize" id="pageSize">
                                            <option value="/giay-nike-pc569762.html?show=hot">Mới nhất</option>
                                            <option value="/giay-nike-pc569762.html?show=priceAsc">Giá tăng dần</option>
                                            <option value="/giay-nike-pc569762.html?show=priceDesc">Giá giảm dần</option>
                                            <option value="/giay-nike-pc569762.html?show=discount">Sale</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="resultAjax">

                        </div>
                        <div class="clearfix"></div>
                        <div class="paginator"><span class="labelPages">1 - 15 / 15</span><span
                                class="titlePages">&nbsp;&nbsp;Trang: </span></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="product-history clearfix">
                </div>
            </div>
        </main>


        <meta name="google-site-verification" content="ueN8a6L-rHAbBgu2lamINIYDu73uSC2eUs8YTWdlYGo" />
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
        </style><input type="hidden" id="bussinessId" value="97757"><input type="hidden" value="" id="uctk"
            name="uctk" /><input type="hidden" id="clienIp" value="113.190.83.234">

        <script>
            $(document).ready(function() {
                function filterProducts() {
                    var action = 'filter_data';
                    var priceFrom = $('#price_form').data('size');
                    var priceTo = $('#price_to').data('size');

                    var href = new URL(window.location.href);
                    var pathParts = href.pathname.split('/');
                    var id = pathParts[1]; // Assuming ID is always the second segment

                    var urlApi = '/filter_data?' +
                        'action=' + action +
                        '&id=' + id +
                        '&price_from=' + priceFrom +
                        '&price_to=' + priceTo +
                        '&sizes=' + get_filter('sizes').join(',');

                    $.ajax({
                        url: urlApi,
                        method: 'GET',
                        data: {
                            action: action,
                            id: id,
                            priceFrom: priceFrom,
                            priceTo: priceTo,
                            sizes: get_filter('sizes')
                        },
                        success: function(data) {
                            try {

                                if (data && data.output) {
                                    console.log(data.output);
                                    $('#resultAjax').html(data.output);
                                } else {
                                    console.error('Invalid response:', data);
                                }
                            } catch (error) {
                                console.error('Error parsing JSON response:', error);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Có lỗi xảy ra:', error);
                            console.log('XHR:', xhr);
                            console.log('Status:', status);
                            console.log('Error:', error);
                        }
                    });
                }

                function get_filter(class_name) {
                    var filter = [];
                    $('.' + class_name + ':checked').each(function() {
                        filter.push($(this).val());
                    });
                    return filter;
                }

                $('#slider-range').on('slidechange', function(event, ui) {
                    $('#price_form').data('size', ui.values[0]);
                    $('#price_to').data('size', ui.values[1]);
                    filterProducts();
                });



                $('.tp_product_category_filter_attribute .tag-choise').on('click', function(e) {
                    e.preventDefault();
                    $(this).toggleClass('active');
                    filterProducts();
                });

                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 5000000,
                    step: 10000,
                    values: [0, 5000000],
                    slide: function(event, ui) {
                        $("#price_form").text(ui.values[0] + 'đ');
                        $("#price_to").text(ui.values[1] + 'đ');
                    },
                    change: function(event, ui) {
                        $('#price_form').data('size', ui.values[0]);
                        $('#price_to').data('size', ui.values[1]);
                        filterProducts();
                    }
                });
            });
        </script>
    </body>
@endsection
