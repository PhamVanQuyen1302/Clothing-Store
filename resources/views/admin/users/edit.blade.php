@extends('layouts.admin')
@section('title')
    Add-Categories
@endsection
@section('css')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/admin/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/admin/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/admin/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/admin/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="w-100 d-flex justify-content-center align-items-center">
        <div class="col-10">
            <h2 class="text-center">Thêm Tài khoản</h2>
            <div class="row">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Ảnh đại diện</label>
                        <input type="file" class="form-control" id="employeeName" name="avatar"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Họ và tên:</label>
                        <input type="text" class="form-control" id="employeeName" name="name"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="employeeName" name="email"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="employeeName" name="tel"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Giới tính</label>
                        <input type="text" class="form-control" id="employeeName" name="gender"
                            placeholder="Enter emploree name">
                            <select class="form-select mb-3" name="gender" aria-label="Default select example">
                                <option value="1" selected>Nam</option>
                                <option value="0" disabled>Nữ</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Địa chỉ:</label>
                        <input type="text" class="form-control" id="employeeName" name="address"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Tuổi</label>
                        <input type="number" class="form-control" id="employeeName" name="age"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Mật khẩu:</label>
                        <input type="text" class="form-control" id="employeeName" name="password"
                            placeholder="Enter emploree name">
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Chức Vụ</label>
                        <select class="form-select mb-3" name="role_id" aria-label="Default select example">
                            <option value="1" selected>User</option>
                            <option value="0" disabled>Addmin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Trang thái</label>
                        <select class="form-select mb-3" name="status" aria-label="Default select example">
                            <option value="1" selected>Bình thường</option>
                            <option value="0" disabled>bị khóa</option>
                        </select>
                    </div>

                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-primary">Sửa tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/admin/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/admin/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/admin/assets/js/app.js') }}"></script>
@endsection
