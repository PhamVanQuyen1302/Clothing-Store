@extends('layouts.admin')
@section('title')
    Add-Categories
@endsection
@section('css')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/admin/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

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
        <h2 class="text-center">Thêm sản phẩm</h2>
        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">
                <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                    <option selected>Chọn danh mục cho sản phẩm</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select>

                <div class="mb-3">
                    <label for="employeeName" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="employeeName" name="name"
                        placeholder="Enter emploree name">
                </div>
                <div class="mb-3">
                    <label for="employeeName" class="form-label">Giá sản phẩm</label>
                    <input type="price" class="form-control" id="employeeName" name="price"
                        placeholder="Enter emploree name">
                </div>
                <div class="mb-3">
                    <label for="employeeName" class="form-label">Số lượng sản phẩm</label>
                    <input type="price" class="form-control" id="employeeName" name="quantity"
                        placeholder="Enter emploree name">
                </div>
                <div class="mb-3">
                    <label for="employeeName" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" id="employeeName" name="image"
                        placeholder="Enter emploree name">
                </div>
                
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Mô tả sản phẩm</label>
                    <textarea class="form-control" id="productDescription" name="description" rows="4"
                        placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
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