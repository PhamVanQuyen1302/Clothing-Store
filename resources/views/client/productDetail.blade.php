@extends('layouts.client')
@section('title')
    Chi tiết sản phẩm
@endsection

@section('content')
<script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/cloudzoom/cloudzoom.js?v=2"></script>
<script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.validationEngine.js?v=2"></script>
<script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.validationEngine-vi.js?v=2">
</script>
<script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.carouFredSel-6.2.1-packed.js?v=2">
</script>
<script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0320/js/pview.js?v=5"></script>
<link rel="stylesheet" href="https://web.nvnstatic.net/css/validationEngine.jquery.css?v=2" type="text/css">
<link rel="stylesheet" href="https://web.nvnstatic.net/js/jquery/cloudzoom/cloudzoom.css?v=2" type="text/css">
<link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0320/css/view.css?v=2" type="text/css">
<link rel="canonical"
    href="http://t0320.store.nhanh.vn/giay-nike-air-force-1-shadow-se-womens-solar-red-db3902100-p37834087.html" />
<input type="hidden" value="37834087" id="idPro">
<input type="hidden" value="2990000" id="pricePro">
<input type="hidden" value="Giày Nike Air Force 1 Shadow SE Women’s “Solar Red” DB3902-100" id="namePro">
    <body class="tp_background tp_text_color">
        <div class="dtsWrp tp_product_detail">
            <div class="product-wrapper clearfix">
                <div class="top-product">
                    <div class="container">
                        <div class="row">
                            <div id="breadcrumb" class="w100 col-lg-12 col-xs-12 col-sm-12 col-md-12 blockCategory">
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="&#x2F;">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a class="569762"
                                            href="&#x2F;giay-nike-pc569762.html">{{ $model->product->category->name }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.detail', $model->id) }}">{{ $model->product->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 alert-main-product">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 product-image clearfix">
                            <div class="product-img-main">
                                <div class="slider-for">
                                    <div class="item">
                                        <a class="imgView" href="{{ Storage::url($model->link_image) }}"
                                            data-fancybox="images">
                                            <img alt="{{ $model->product->name }}" class="cloudzoom-gallery z"
                                                src="{{ Storage::url($model->link_image) }}" />
                                        </a>
                                    </div>

                                </div>

                                <div class="wishlist prd37834087">
                                    <div data-id="37834087" class="wishlistItems">
                                        <span class="wish-none"><i class="far fa-heart"></i>Sản phẩm yêu thích</span>
                                        <a class="view-wish" href="/wishlist">
                                            <span>Đã thêm vào yêu thích</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 product-info clearfix">
                            <div class="product-infomation">
                                <h1 class="tp_product_detail_name">{{ $model->product->name }}</h1>
                                <div class="cate-name">
                                    <p>Danh mục: <a href="/giay-nike-pc569762.html"><span class="nameCategoryView"
                                                style="color: #de0c19;">{{ $model->product->category->name  }}</span></a></p>
                                    <p class="p_code">Mã sản phẩm: <span class="pview-code" style="color: #de0c19;"></span>
                                    </p>
                                </div>

                                <div class="price-product">
                                    <span
                                        class="discountPrice tp_product_detail_price">{{ number_format($model->product->price) }}
                                        ₫</span>
                                </div>
                                <hr class="hidden-sm hidden-xs" />
                            </div>

                            <div class="product-selection">
                                <div class="size req clearfix" data-column="i2">
                                    <label>Size</label>
                                    <div class="clearfix">
                                        <a href="#" rel="nofollow" class="size-link">40</a>
                                        <a href="#" rel="nofollow" class="size-link">41</a>
                                    </div>
                                    <div style="display: none">
                                    </div>
                                </div>
                                <div class="product-quantity clearfix">
                                    <label>Số lượng</label>
                                    <span class="number-down" >-</span>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                                        max="5000" />
                                    <span class="number-up" >+</span>
                                </div>
                                {{-- <input type="hidden" name="" id="product-info"
                                    data-product-id="{{ $product['p_id'] }}"> --}}
                                <div class="purchase-product">
                                    <button id="add-to-cart-btn"
                                        class="btn-outline btn-addCart add-to-cart unsel btn addtocart-modal"
                                        selId="37834087" data-psid="37834087" title ck="0" disabled>
                                        <img width="18" class="lazyload"
                                            data-src="https://web.nvnstatic.net/tp/T0320/img/tmp/img_290616.png?v=3">
                                        Thêm vào giỏ hàng
                                    </button>
                                    <button id="buy-now-btn"
                                        class="btn-outline btn-addCart addnow unsel btn addtocart-modal buyNow"
                                        selId="37834087" data-psid="37834087" title ck="0" disabled>
                                        Mua ngay
                                    </button>
                                    <div class="cart-modal">
                                        <a href="#cartModal" data-toggle="modal">
                                            + Hướng dẫn mua hàng</a>
                                        <div id="cartModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;
                                                        </button>
                                                        <h4 class="modal-title" style="font-size: 14px">
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Hướng dẫn mua hàng</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- End size modal -->
                                    </div>
                                </div>
                                <div class="guide-size">
                                    <a href="#sizeModal" data-toggle="modal">
                                        <span><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 394.4 394.4"
                                                style="enable-background:new 0 0 394.4 394.4;" xml:space="preserve"
                                                width="512px" height="512px" class="">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M125.2,51.2c-22.4,0-40,12.8-40,28.8s17.6,28.8,40,28.8c22.4,0,40-12.8,40-28.8S147.6,51.2,125.2,51.2z M125.2,92.8 c-13.6,0-24-7.2-24-12.8c0-6.4,10.4-12.8,24-12.8c13.6,0,24,7.2,24,12.8C149.2,86.4,138.8,92.8,125.2,92.8z"
                                                                data-original="#000000" class="active-path"
                                                                data-old_color="#000000" fill="#DE101D" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M347.6,144h-104V80c0-44-52.8-80-118.4-80S6.8,36,6.8,80v163.2c0,36,36,68,87.2,77.6v65.6c0,4.8,3.2,8,8,8h245.6 c22.4,0,40-17.6,40-40V184C387.6,161.6,370,144,347.6,144z M125.2,16c56.8,0,102.4,28.8,102.4,64c0,35.2-45.6,64-102.4,64 S22.8,115.2,22.8,80C22.8,44.8,68.4,16,125.2,16z M227.6,120v24h-32C208.4,137.6,219.6,129.6,227.6,120z M94,216v88 c-41.6-8.8-71.2-32.8-71.2-60.8V120c20.8,24,58.4,40,102.4,40h222.4c13.6,0,24,10.4,24,24c0,13.6-10.4,24-24,24H102 C97.2,208,94,211.2,94,216z M373.2,353.6h-1.6c0,13.6-10.4,24-24,24H338v-36.8c0-4.8-3.2-8-8-8s-8,3.2-8,8v36.8h-29.6v-36.8 c0-4.8-3.2-8-8-8s-8,3.2-8,8v36.8h-29.6v-36.8c0-4.8-3.2-8-8-8s-8,3.2-8,8v36.8h-29.6v-36.8c0-4.8-3.2-8-8-8s-8,3.2-8,8v36.8 h-29.6v-36.8c0-4.8-3.2-8-8-8s-8,3.2-8,8v36.8h-28V316c0-0.8,0.8-1.6,0.8-1.6c0-1.6,0-2.4-0.8-4V224h237.6c8.8,0,17.6-3.2,24-8 V353.6z"
                                                                data-original="#000000" class="active-path"
                                                                data-old_color="#000000" fill="#DE101D" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            Hướng dẫn chọn size</span></a>
                                    <div id="sizeModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;
                                                    </button>
                                                    <h4 class="modal-title" style="font-size: 14px">Hướng dẫn chọn size
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                    <h2
                                                        style="font-family:Montserrat;color:rgb(17,17,17);margin:30px 0px 20px;font-size:27px;line-height:38px;">
                                                        <span style="font-size:18px;"><span
                                                                style="font-family:arial, helvetica, sans-serif;"><span
                                                                    style="font-weight:700;">Cách chọn size giày đảm bảo
                                                                    chính xác</span></span></span>
                                                    </h2>

                                                    <ul
                                                        style="padding-right:0px;padding-left:0px;margin-bottom:26px;color:rgb(34,34,34);font-family:Montserrat;font-size:15px;">
                                                        <li
                                                            style="line-height:inherit;margin-left:21px;margin-bottom:10px;">
                                                            <p><span style="font-size:14px;"><span
                                                                        style="font-family:arial, helvetica, sans-serif;"><span
                                                                            style="font-weight:700;">Bước
                                                                            1:</span> <em>Trước tiên, bạn sẽ cần đo chiều
                                                                            dài và chiều rộng bàn chân
                                                                            mình.</em></span></span></p>
                                                        </li>
                                                        <li
                                                            style="line-height:inherit;margin-left:21px;margin-bottom:10px;">
                                                            <p><span style="font-size:14px;"><span
                                                                        style="font-family:arial, helvetica, sans-serif;"><span
                                                                            style="font-weight:700;">Bước 2:</span> <em>Sau
                                                                            khi có thông số chiều dài bàn chân tính bằng
                                                                            centimet, bạn cộng thêm 1,2cm nữa. Con số này
                                                                            được gọi là L.</em></span></span></p>
                                                        </li>
                                                        <li
                                                            style="line-height:inherit;margin-left:21px;margin-bottom:0px;">
                                                            <p><span style="font-size:14px;"><span
                                                                        style="font-family:arial, helvetica, sans-serif;"><span
                                                                            style="font-weight:700;">Bước
                                                                            3:</span> <em>Tiếp
                                                                            đến, bạn đối chiếu số L với bảng size giàydành
                                                                            cho Nam/ Nữ hoặc Trẻ em để biết được mình nên
                                                                            mua giày size báo nhiêu.</em></span></span></p>
                                                        </li>
                                                        <li
                                                            style="line-height:inherit;margin-left:21px;margin-bottom:0px;text-align:center;">
                                                            <img alt="Bảng size giày Nike dành cho Nam"
                                                                src="https://tintuc.hoang-phuc.com/wp-content/uploads/2021/11/cach-chon-size-giay-nike-bang-do-size-giay-chinh-hang-viet-nam-my-nhat2.jpg" />
                                                        </li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- End size modal -->
                                </div>


                            </div>
                            <!--                    /kho hàng-->
                            <div class="sys-store">
                            </div>
                            <!--                    tag-->
                            <section class="tags block tp_product_detail_tag">
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-intro-wrapper clearfix productDetails">
                <div class="container">
                    <div class="row">
                        <div id="pContent" class="col-lg-9 col-md-8 col-xs-12 col-sm-12">
                            <div class="title">
                                <span class="tab active" data-show="#tab1">Mô tả</span>
                                <span class="tab clickSocial" data-show="#tab2">Đánh giá</span>
                            </div>
                            <div id="tab1" class="contentTab active" style="padding: 20px 0;">
                                <div class="">
                                    <p>
                                        {{ $model->product->description  }}
                                    </p>
                                </div>
                            </div>
                            <div style="margin-top: 10px;">
                                <div class="fb-comments tp_product_detail_comment"
                                    data-href="http://t0320.store.nhanh.vn/giay-nike-air-force-1-shadow-se-womens-solar-red-db3902100-p37834087.html"
                                    data-width="100%" data-numposts="5"></div>
                            </div>
                            <div id="tab2" class="contentTab showSocial">

                                <h3>Mời bạn đánh giá hoặc đặt câu hỏi về <strong>Giày Nike Air Force 1 Shadow SE Women’s
                                        “Solar Red” DB3902-100</strong></h3>
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-12 rate-content">
                                        <h6>Đánh giá trung bình</h6>
                                        <div class="rate-c">0 /5</div>
                                        <div class="pageView">
                                            <p data-scroll="#tab2" id="voteView0" class="si voteView"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-12 row_detail_number rate-content">
                                        <form action="" method="post">
                                            <div>
                                                <p style="color: #FE5335">Đánh giá sản phẩm</p>
                                                <p class="vote">
                                                    <span class="si" data-rate="1"></span>
                                                    <span class="si" data-rate="2"></span>
                                                    <span class="si" data-rate="3"></span>
                                                    <span class="si" data-rate="4"></span>
                                                    <span class="si" data-rate="5"></span>
                                                    <i class="clearfix"></i>
                                                </p>
                                            </div>
                                            <div>
                                                <p style="color: #FE5335">Nội dung đánh giá</p>
                                                <textarea id="comment" class="input" style="width: 100%" placeholder="Nội dung tối thiểu 30 ký tự"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-12 send-reviews rate-content">
                                        <div id="btnRate">
                                            <a class="btnSignin btnRed btnColor" rel="nofollow" href="/user/signin"
                                                style="white-space: nowrap;">Đăng nhập để đánh giá</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-text bg_w" style="display: inline-block">
                                    <h4>Đánh giá sản phẩm</h4>
                                    <p>Chưa có bình luận đánh giá nào</p>
                                </div>
                                <!-- end danh gia -->
                                <p>Chỉ những khách hàng đã đăng nhập và mua sản phẩm này mới có thể đưa ra đánh giá.</p>
                            </div>
                            <div id="tab3" class="contentTab">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-12 col-sm-12">
                            <div class="list-sidebar-right">

                                <ul>
                                    <li><a href="#"><i class="fal fa-angle-right" aria-hidden="true"></i> Vận
                                            chuyển miến
                                            phí trong bán kinh 5km</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right" aria-hidden="true"></i> Đổi trả
                                            trong vòng
                                            3 ngày thủ tục đơn giản</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right" aria-hidden="true"></i> Nhà cung
                                            cấp xuất
                                            hóa đơn trực tiếp cho sản phẩm này</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relate-view-product clearfix tp_product_detail_suggest">
                <div class="container">
                    <div class="row">
                        <div class="product_header col-md-12">
                            <div class="title-main text-center">
                                <h2 class="title-hd"><a href="#">Có thể bạn quan tâm</a></h2>
                            </div>
                        </div>
                       
                        @php
                            

                        @endphp
                        <div class="slide-wrapper slide-product relate-product">
                            <div class="product-grid">
                                {{-- @foreach ($getProductFromCategory as $item)
                                    <div class="box-product box_tab_index prdWrapper" data-pid="37834087">
                                        <div class="item col-lg-3 col-md-4 col-xs-6 col-sm-6">
                                            <div class="inner-item sold-out">
                                                <div class="p-image">
                                                    <a class="a-image" href="/product/{{ $item['p_id'] }}">
                                                        <img data-sizes="auto" src="{{ $item['p_image'] }}"
                                                            data-src="{{ $item['p_image'] }}"
                                                            class="attachment-medium size-medium wp-post-image lazyload"
                                                            alt="Giày Nike Air Force 1 Shadow SE Women’s “Solar Red” DB3902-100" />
                                                    </a>
                                                    <div class="btn-quickview tp_button" data-psId="37834087">
                                                        <i class="fal fa-eye"></i>
                                                        <a href="/product/{{ $item['p_id'] }}">
                                                            <span> Xem nhanh</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="box-text">
                                                    <p class="title"><a class="tp_product_name"
                                                            href="/product/{{ $item['p_id'] }}"
                                                            title="Giày Nike Air Force 1 Shadow SE Women’s “Solar Red” DB3902-100">{{ $item['p_name'] }}</a>
                                                    </p>

                                                    <p class="price">
                                                        <strong class="f-left">
                                                            <span
                                                                class="tp_product_price">{{ number_format($item['p_price']) }}₫</span>
                                                        </strong>
                                                    </p>
                                                    <p class="discount-percent"></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div style="display: none;">
            <div id="dMsg"></div>
        </div>

        <div id="guide-size" class="modal fade" role="dialog">
            <div class="modal-content clearfix"></div>
        </div>
        <div id="modalShow" class="modal fade in" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center"><span class="title-modal">Đang xử lý</span>
                        <div class="desc-modal"><img src="https://web.nvnstatic.net/tp/T0320/img/loading.gif?3?v=3"
                                alt="loading" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modalAbandoned" class="modal fade right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            data-backdrop="true" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content"></div>
                <!--/.Content-->
            </div>
        </div>
        <input type="hidden" class="checkCookies" value=''>
        <div id="dialogMessage"></div>



        <input type="hidden" class="fanpageId" value="">
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
    </body>
@endsection


