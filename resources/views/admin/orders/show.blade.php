@extends('layouts.admin')
@section('title')
    {{ $title }}
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
    <div class="container mt-5">
        <h1 class="mb-4">Chi Tiết Đơn Hàng</h1>

        <div class="card mb-4">
            <div class="card-header">
                Thông Tin Đơn Hàng
            </div>
            <div class="card-body">
                <p><strong>Mã Đơn Hàng:</strong> #<span id="order-id">{{ $model->code_order }}</span></p>
                <p><strong>Ngày Đặt:</strong> <span id="order-date">{{ $model->booking_date }}</span></p>
                <p><strong>Trạng Thái:</strong> <span id="order-status">{{ $model->orderStatus->name }}</span></p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                Thông Tin Khách Hàng
            </div>
            <div class="card-body">
                <p><strong>Họ Tên:</strong> <span id="customer-name">{{ $model->user->name }}</span></p>
                <p><strong>Email:</strong> <span id="customer-email">{{ $model->user->email }}</span></p>
                <p><strong>Số Điện Thoại:</strong> <span id="customer-phone">{{ $model->user->tel }}</span></p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Danh Sách Sản Phẩm
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody id="product-list">
                        @foreach ($order_details as $detail)
                            <tr>
                                <td>{{ $detail->product->name }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>{{ number_format($detail->price) }} VNĐ</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Tổng Cộng
            </div>
            <div class="card-body">
                <p><strong>Tổng Tiền:</strong> <span id="total-amount">{{ number_format($model->totak) }} VNĐ</span></p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.orders.index')}}" class="btn btn-primary">Quay lại</a>
            {{-- <button class="btn btn-success">Cập Nhật Trạng Thái</button> --}}
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
