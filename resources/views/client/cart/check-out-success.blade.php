@extends('layouts.client')
@section('title')
    cảm ơn khách hàng
@endsection
@section('content')

    <body class="tp_background tp_text_color">



        <div id="breadcrumb-wrapper" class="breadcrumb-w-img">
            <div class="breadcrumb-overlay"></div>
            <div class="breadcrumb-content">
                <div class="wrapper">
                    <div class="inner text-center">
                        <div class="breadcrumb-big">
                            <h2>Thanh toán hàng thành công</h2>
                        </div>
                        <div class="breadcrumb-small">
                            <a href="/" title="Trang chủ">Trang chủ</a>
                            <span aria-hidden="true">/</span>
                            <a>Thanh toán hàng thành công</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="mainlayout">
            <div class="container">
                <div class="orderview">
                    <span class="sidebar-title">- Cảm ơn ! -</span>
                    <div class="clearfix"></div>
                    <p>Mã đơn đặt hàng của bạn là <b>387541141</b><br></p>
                    <p>Bạn sẽ sớm nhận được email đến <b class="red">quyenpvph42365@fpt.edu.vn</b>
                        xác nhận thông tin đơn hàng và một đường link để kiểm tra tình trạng đơn hàng. </br>
                        Hy vọng bạn sẽ hài lòng với sản phẩm vừa đặt mua.</p>
                    <div class="text-center col-xs-12"><a href="/" class="btn btn-green">Tiếp tục mua sắm</a></div>
                </div>
            </div>
        </main>
        <style type="text/css">
            .orderview {
                text-align: center;
                font-size: 16px;
                margin: 30px 0;
                padding: 10px 0 15px 0;
                display: inline-block;
                width: 100%;
                background: #ececec61;
                border-radius: 5px;
            }

            .orderview .btn {
                margin-top: 20px;
            }
        </style>

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
            name="uctk" /><input type="hidden" id="clienIp" value="113.178.58.8">
    </body>
@endsection
