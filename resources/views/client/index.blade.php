@extends('layouts.client')
@section('title')
    Giày chính hãng thể thao
@endsection
@section('content')
    <section class="slide-banner">
        <div class="owl-carousel owl-carousel-1 owl-theme">
            <div class="item">
                <div class="banner-main">
                    <a href="javascript:void(0);" target="_self"><img data-sizes="auto"
                            src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                            data-src="https://pos.nvncdn.com/5a10ca-97757/bn/20220316_iRD2HeQ1KNAhjKnMrt32xPkm.jpg"
                            class="lazyload" alt="banner" /></a>
                </div>
            </div>

            <div class="item">
                <div class="banner-main">
                    <a href="javascript:void(0);" target="_self"><img data-sizes="auto"
                            src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                            data-src="https://pos.nvncdn.com/5a10ca-97757/bn/20220316_cATPThQHFkV0ah7fG1SmJH8x.jpg"
                            class="lazyload" alt="banner" /></a>
                </div>
            </div>

            <div class="item">
                <div class="banner-main">
                    <a href="javascript:void(0);" target="_self"><img data-sizes="auto"
                            src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                            data-src="https://pos.nvncdn.com/5a10ca-97757/bn/20220316_A1MPTlawpppEKeUlFjFyUKWe.jpg"
                            class="lazyload" alt="banner" /></a>
                </div>
            </div>
        </div>
    </section>



    <section class="bannercategory">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="box-sport-content mb-3">
                        <a href="/giay-adidas-pc569763.html">
                            <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                data-src="https://pos.nvncdn.com/5a10ca-97757/bn/20220316_maOThyFeQVCy9WgImsF1tmZK.jpg"
                                title="Giày Adidas" alt="Giày Adidas">
                        </a>
                        <a href="/giay-adidas-pc569763.html" class="more">Giày Adidas</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="box-sport-content mb-3">
                        <a href="javascript:void(0);">
                            <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                data-src="https://pos.nvncdn.com/5a10ca-97757/bn/20220316_VtbDb9uV0gGgwqKgFgZpPZ3p.jpg"
                                title="Giày Nike" alt="Giày Nike">
                        </a>
                        <a href="javascript:void(0);" class="more">Giày Nike</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="box-sport-content mb-3">
                        <a href="javascript:void(0);">
                            <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                data-src="https://pos.nvncdn.com/5a10ca-97757/bn/20220316_V7cBJz6hxjJNuxzlKswECtjz.jpg"
                                title="Phụ kiện quần áo" alt="Phụ kiện quần áo">
                        </a>
                        <a href="javascript:void(0);" class="more">Phụ kiện quần áo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-products-hight home-page clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-main text-center">
                        <h1 class="title-hd"><a href="#">Sản phẩm nổi bật</a></h1>
                        <span class="text-title">Khuyến mãi cuối tuần</span>
                    </div>
                </div>
            </div>
            <div class="list-menu-top text-center">
                <div class="tabs ">
                    <div class="tabs_cap">
                        <div id="tab-caption">
                            <div id="tab-cap-1" class="tab-caption-item selected" data-show="promotion" data-id="569807">
                                <p class="headtitle tp_title"><span class="text">Nike Jordan</span>
                                </p>
                            </div>
                            <div id="tab-cap-2" class="tab-caption-item" data-show="hot" data-id="569762">
                                <p class="headtitle tp_title"><span class="text">Nike Low</span>
                                </p>
                            </div>
                            <div id="tab-cap-3" class="tab-caption-item" data-show="new" data-id="569808">
                                <p class="headtitle tp_title"><span class="text">Quần áo</span>
                                </p>
                            </div>
                            <div id="tab-cap-4" class="tab-caption-item" data-id="124156">
                                <p class="headtitle tp_title"><span class="text">Túi xách</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab-content">
                        <div id="tab-content-1" class="tab-content-item" style="display: block">
                            <div class="list-sps">
                                <div class="row">
                                    {{-- @dd($data->image->product->id) --}}
                                    @foreach ($data as $item)

                                    
                                        <div class="box-product box_tab_index prdWrapper pro-loop prd37833639"
                                            data-pid="37833639">
                                            <div class="item col-lg-3 col-md-4 col-xs-6 col-sm-6">
                                                <div class="inner-item sold-out product-item" data-id="37833639"
                                                    data-img="">
                                                    <div class="p-image">
                                                        <a class="a-image"
                                                            href="{{ route('home.detail',$item->product->id) }}">
                                                            <img data-sizes="auto"
                                                                src="{{ Storage::url($item->link_image) }}"
                                                                data-src="{{ Storage::url($item->link_image) }}"
                                                                class="attachment-medium size-medium wp-post-image lazyload productHover productHover37833639"
                                                                alt="{{ $item->product->name }}" />
                                                        </a>
                                                        <div class="btn-quickview tp_button" data-psId="37833639"><i
                                                                class="fal fa-eye"></i><a href="{{ route('home.detail',$item->product->id) }}"><span> Xem nhanh</span></a></div>
                                                    </div>
                                                    <div class="box-text">
                                                        <p class="title"><a class="tp_product_name"
                                                                href="{{ route('home.detail',$item->product->id) }}"
                                                                title="{{ $item->product->name }}">{{ $item->product->name }}</a>
                                                        </p>

                                                        <p class="price">
                                                            <strong class="f-left">
                                                                <span class="tp_product_price">{{ number_format($item->product->price) }} đ</span>
                                                            </strong>
                                                        </p>
                                                        <p class="discount-percent"></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-whynote">
        <div class="container">
            <div class="row justify-content-end ">
                <div class="col-lg-6 policy-block col-md-12">
                    <div class="box-why-note">
                        <div class="title-why">
                            <h2><a href="#">Tại sao chọn Nhanh Sneaker</a></h2>
                        </div>
                        <div class="list-box-why">
                            <div class="icon-left">
                                <img src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                    data-src="https://web.nvnstatic.net/tp/T0320/img/i1.png?v=3" class="lazyload"
                                    alt="">
                            </div>
                            <div class="text-icon">
                                <h3><a href="#">Miễn phí vận chuyển</a></h3>
                                <p>Với nhiều khuyến mại, ưu đãi hấp dẫn khách hàng sẽ đặt được nhiều dịch vụ tốt nhất
                                </p>
                            </div>
                        </div>
                        <div class="list-box-why">
                            <div class="icon-left">
                                <img data-src="https://web.nvnstatic.net/tp/T0320/img/i2.png?v=3"
                                    src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3" class="lazyload"
                                    alt="">
                            </div>
                            <div class="text-icon">
                                <h3><a href="#">Hỗ trợ 24/7</a></h3>
                                <p>Với nhiều khuyến mại, ưu đãi hấp dẫn khách hàng sẽ đặt được nhiều dịch vụ tốt nhất
                                </p>
                            </div>
                        </div>
                        <div class="list-box-why">
                            <div class="icon-left">
                                <img data-src="https://web.nvnstatic.net/tp/T0320/img/i3.png?v=3" alt=""
                                    src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3" class="lazyload">
                            </div>
                            <div class="text-icon">
                                <h3><a href="#">30 ngày đổi trả</a></h3>
                                <p>Với nhiều khuyến mại, ưu đãi hấp dẫn khách hàng sẽ đặt được nhiều dịch vụ tốt nhất
                                </p>
                            </div>
                        </div>
                        <div class="list-box-why">
                            <div class="icon-left">
                                <img data-src="https://web.nvnstatic.net/tp/T0320/img/i4.png?v=3" alt=""
                                    src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3" class="lazyload">
                            </div>
                            <div class="text-icon">
                                <h3><a href="#">Thanh toán bảo mật</a></h3>
                                <p>Với nhiều khuyến mại, ưu đãi hấp dẫn khách hàng sẽ đặt được nhiều dịch vụ tốt nhất.
                                    Với nhiều khuyến mại, ưu đãi hấp dẫn khách hàng sẽ đặt được nhiều dịch vụ tốt nhất
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-products-content">
    </section>
    <section id="loadcategory">
    </section>



    <section class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-main text-center">
                        <h2 class="title-hd">
                            <a href="/news">TIN TỨC NỔI BẬT</a>
                        </h2>
                        <span class="text-title">Tin tức mới nhất và thú vị nhất</span>
                    </div>
                </div>
                <div class="col-md-7 hidden-xs hidden-sm">

                    <div class="box-news">
                        <div class="img-top">
                            <a href="/nike-adapt-bb-doi-giay-cong-nghe-den-tu-tuong-lai-n98709.html">
                                <img class="w-100"
                                    src="https://pos.nvncdn.com/5a10ca-97757/art/20220316_iDBb0JCM1rsdgVj4xPCm5O3a.jpg"
                                    alt=""></a>
                        </div>
                        <div class="date">
                            <span>16/03</span>
                            <span><b>2022</b></span>
                        </div>
                        <div class="text-bottom">
                            <h3><a href="/nike-adapt-bb-doi-giay-cong-nghe-den-tu-tuong-lai-n98709.html">NIKE ADAPT BB
                                    –
                                    ĐÔI GIÀY CÔNG NGHỆ ĐẾN TỪ TƯƠNG LAI</a></h3>
                            <p href="/nike-adapt-bb-doi-giay-cong-nghe-den-tu-tuong-lai-n98709.html"
                                class="title-category">Nike luôn khẳng định được vị thế của mình trong làng thời trang
                                giày khi liên tục đưa ra những mẫu giày thời trang độc đáo cũng như những mẫu giày công
                                nghệ cực đỉnh. Mới đây nhất chính là mẫu Nike Adapt BB với công nghệ tự thắt dây mới.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-5 col-xs-12 col-sm-12">
                    <div class="box-news-container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a
                                            href="/giai-ma-suc-hut-cua-doi-giay-co-dien-adidas-supercourt-x-blackpink-n98708.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                                data-src="https://pos.nvncdn.com/5a10ca-97757/art/20220316_xzUSjmtnTZhF7VgHkcTrXiA3.jpg "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a
                                                href="/giai-ma-suc-hut-cua-doi-giay-co-dien-adidas-supercourt-x-blackpink-n98708.html">GIẢI
                                                MÃ SỨC HÚT CỦA ĐÔI GIÀY CỔ ĐIỂN ADIDAS SUPERCOURT X BLACKPINK</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Dạo gần đây,
                                            Adidas cho ra mắt mẫu giày Adidas Supercourt kết hợp với Blackpink khiến
                                            những tín đồ thời trang điên đảo. Vậy lý do gì khiến đôi giày vô cùng đơn
                                            giản này lại “hot” đến vậy? Hãy cùng Deestore.vn tìm hiểu nhé.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a href="/bo-suu-tap-dang-mong-doi-nhat-cua-adidas-home-of-classic-n98706.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                                data-src="https://pos.nvncdn.com/5a10ca-97757/art/20220316_qFejW2uWJg3bv5BtgikYk0ys.jpg "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a
                                                href="/bo-suu-tap-dang-mong-doi-nhat-cua-adidas-home-of-classic-n98706.html">BỘ
                                                SƯU TẬP ĐÁNG MONG ĐỢI NHẤT CỦA ADIDAS – “HOME OF CLASSIC”</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Có thể nói đây
                                            là
                                            một trong những BST được mong đợi và đáng chú ý của nhà Adidas trong năm
                                            2022. Bằng việc tung ra 10 mẫu giày với phong cách cực “đỉnh”, Adidas đã
                                            không hề làm các fan thất vọng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a href="/lieu-xu-huong-sneaker-nao-se-thong-tri-nam-2022-n98705.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                                data-src="https://pos.nvncdn.com/5a10ca-97757/art/20220316_DvVxQ2FuX4MIP4vmI2LTyltS.png "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a href="/lieu-xu-huong-sneaker-nao-se-thong-tri-nam-2022-n98705.html">LIỆU
                                                XU HƯỚNG SNEAKER NÀO SẼ THỐNG TRỊ NĂM 2022</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Nếu như năm 2019
                                            qua đi với những đôi “giày của bố” hay những đôi giày mang phong cách cổ
                                            điển làm khuynh đảo giới sneaker thì liệu 2022 sẽ là gì đây. Dựa vào nhận
                                            định của giám đốc điều hành Diadora – Enrico Polegato, Nia Jones – đồng sáng
                                            lập và Giám đốc sáng tạo của một thương hiệu sneaker nổi tiếng cũng như ứng
                                            dụng tìm kiếm thời trang Lyst đã đưa ra xu hướng sneaker năm 2022.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a
                                            href="/nhung-lam-tuong-ma-hau-het-nguoi-viet-nam-van-nghi-ve-giay-authentic-n98704.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=3"
                                                data-src="https://pos.nvncdn.com/5a10ca-97757/art/20220316_TRS7IIj04ozEzixetR9adfIR.jpg "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a
                                                href="/nhung-lam-tuong-ma-hau-het-nguoi-viet-nam-van-nghi-ve-giay-authentic-n98704.html">NHỮNG
                                                LẦM TƯỞNG MÀ HẦU HẾT NGƯỜI VIỆT NAM VẪN NGHĨ VỀ GIÀY AUTHENTIC</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Không thể phủ
                                            nhận
                                            được độ chịu chơi của những sneakerhead khi mạnh tay chi rất nhiều tiền cho
                                            những đôi giày chính hãng (hay còn được gọi là giày Auth). Tuy vậy, một số
                                            vẫn có những nhận định sai lầm về giày auth. Nhanhvn cũng đã gặp rất nhiều
                                            trường hợp khách hiểu lầm như vậy và phải giải thích lại. Từ những kinh
                                            nghiệm “xương máu”, Nhanhvn xin chia sẻ cho các bạn những lầm tưởng mà hầu
                                            hết các bạn đều mắc phải về giày auth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
