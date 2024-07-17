@extends('layouts.client')
@section('title')
    Đăng ký
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-xs-12 wrapbox-heading-page">
            <div class="header-page clearfix">
                <h1>Đăng ký</h1>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 wrapbox-content-page ">
            <div class="userbox">
                <div id="create_customer">
                    <form method="post" action="{{ url('auth/register') }}" enctype="multipart/form-data" class="mt-3">
                        @csrf

                        <div class="form-group">
                            <label for="fullName">Họ và tên</label>
                            <input name="name" type="text" class="form-control" value="{{ old('name') }}"
                                id="fullName" placeholder="Họ và tên">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" value="{{ old('email') }}"
                                id="email" placeholder="Email">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input name="password" type="password" class="form-control" value="{{ old('password') }}"
                                id="password" placeholder="Mật khẩu" minlength="6">
                            @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mobile">Điện thoại</label>
                            <input name="tel" type="text" class="form-control" value="{{ old('tel') }}"
                                id="mobile" placeholder="Điện thoại">
                            @error('tel')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                       
                        <div class="form-group" style="display: none">
                            <label for="password">Chức vụ</label>
                            <select class="form-select mb-3" name="role_id">
                                @foreach ($roles as $id => $name)
                                    <option value="{{ $id }}" {{ $id == 2 ? 'disabled' : '' }}>
                                        {{ $name }}
                                    </option>

                                    
                                @endforeach
                            </select>
                            @error('role_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <button type="submit" name="submit" id="btnSubmit" class="btn"
                            style="background-color: black ; color:aliceblue; padding: 10px 40px">Đăng ký</button>
                    </form>
                </div>
                <div class="clearfix req_pass mt-2">
                    <a class="come-back" href="/"><i class="fal fa-long-arrow-left"></i> Quay lại trang
                        chủ</a>
                </div>
            </div>
        </div>

    </div>

    </div>
@endsection
