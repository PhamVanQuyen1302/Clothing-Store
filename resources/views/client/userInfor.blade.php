@extends('layouts.client')
@section('title')
    Thông tin cá nhân
@endsection
@section('content')
    <!-- T0320 -->

    <body class="tp_background tp_text_color">


        <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.validationEngine-vi.js?v=2">
        </script>
        <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.validationEngine.js?v=2"></script>
        <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0320/js/user.js?v=2"></script>
        <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0320/css/user.css?v=2" type="text/css">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
                    <div class="menuPv">
                        <div class="userList">
                            <a href="/profile"><b>Tài khoản của tôi</b></a>
                            <a href="/profile/edit">Thông tin cá nhân</a>
                            <a href="/profile/changepassword">
                                Đổi mật khẩu </a>
                            <a href="/order">Quản lý đơn hàng</a>
                            <a href="/user/signout">Đăng xuất</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 profileRight">
                    <div class="ctrl-wrapper">
                        <div id="profileContent">
                            <h1>Thông tin cá nhân</h1>
                            <div class="desUserIndex">
                                Quý khách có thể truy cập và sửa đổi thông tin chi tiết cá nhân (tên, địa chỉ thanh toán, số
                                điện thoại v.v.) để đẩy nhanh quá trình mua hàng của quý khách trong tương lai và thông báo
                                cho chúng tôi về những thay đổi trong chi tiết liên hệ. </div>
                            <div id="profileIf">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <form class="profile" method="post" action="{{ route('home.update',$model->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="id" value="">
                                        <div class="pf col-lg-6 col-md-6 col-sm-12 col-xs-12 itemsPr">
                                            <span>Họ tên</span>
                                            <span><b><input type="text" name="name" value="{{ $model->name }}"></b></span>
                                        </div>
                                        <div class="pf col-lg-6 col-md-6 col-sm-12 col-xs-12 itemsPr">
                                            <span>email</span>
                                            <span><b><input type="text" disabled name="email" value="{{ $model->email }}"></b></span>
                                        </div>
                                        <div class="pf col-lg-6 col-md-6 col-sm-12 col-xs-12 itemsPr">
                                            <span>Số điêm thoại</span>
                                            <span><b><input type="text" name="tel" value="{{ $model->tel }}"></b></span>
                                        </div>
                                        <div class="pf col-lg-6 col-md-6 col-sm-12 col-xs-12 itemsPr">
                                            <span>Địa chỉ</span>
                                            <span><b><input type="text" name="address" value="{{ $model->address }}"></b></span>
                                        </div>
                                        <div class="pf col-lg-6 col-md-6 col-sm-12 col-xs-12 itemsPr">
                                            <span>Avatar</span>
                                            <span><b><input type="file" name="avatar" value=""></b></span>
                                            <img src="{{ Storage::url($model->avatar )}}" width="50" height="50">
                                        </div>
                
                                        <div class="pf col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btnGreen">Cập nhật thông tin cá nhân</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
        </style><input type="hidden" id="bussinessId" value="97757"><input type="hidden"
            value="KZFKJLjlD00RLAdzUaC9Q5YRhS72SHrPzMCYj7z3BG7DA0LhPehuRROuN7t0w5ua8X0gIKZ81FbXXRLvTeknHYYQX6RjS5unBAYzO5vNjtOJyVs1pM7DjbmuEXUa0QsHXVRl6mNv0i9LlFoCBMupCBQXGOQrcK0MWVEhsNvS7uVKCn1cXWQp"
            id="uctk" name="uctk" /><input type="hidden" id="clienIp" value="113.178.58.8">
    </body>
@endsection
