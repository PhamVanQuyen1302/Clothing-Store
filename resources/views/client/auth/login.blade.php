@extends('layouts.client')
@section('title')
    Đăng nhập
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-xs-12 wrapbox-heading-page">
            <div class="header-page clearfix">
                <h1>Đăng nhập</h1>
            </div>
        </div>

        <div class="col-md-6 col-xs-12 wrapbox-content-page ">
            <div id="customer-login">
                <div id="login" class="userbox">
                    <div class="accounttype">
                        <h2 class="title"></h2>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="customer_login">
                        <form method="post" action="{{ url('auth/login') }}" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" id="username" placeholder="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password">Mật Khẩu</label>
                                <input name="password" type="password" class="form-control" id="password"
                                    placeholder="Mật khẩu" value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-3 mb-3">
                                <span class="text-danger">


                                </span>
                            </div>
                            <button type="submit" name="submit" id="btnSubmit" class="btn "
                                style="background-color: black ; color:aliceblue; padding: 10px 40px">Đăng nhập</button>
                        </form>
                        <div class="clearfix action_account_custommer">
                            <div class="req_pass">
                                <a href="/auth/forgotpassword" style="display: block">Quên Mật Khẩu?</a>
                                <a href="/auth/register" style="display: block">Đăng ký</a>
                            </div>
                        </div>
                        <div class="divider">
                            <span>Hoặc</span>
                        </div>
                    </div>
                    <div class="login-social">
                        <a href="/user/fbsignin"><i class="fab fa-facebook-f"></i> <span>Đăng nhập bằng tài
                                khoản facebook</span></a>
                    </div>
                    <div class="login-social" style="background: #df4a32;margin-top: 10px">
                        <a href="/user/ggsignin"><i class="fab fa-google-plus-g"></i>
                            <span>Đăng nhập bằng tài khoản gmail</span></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
