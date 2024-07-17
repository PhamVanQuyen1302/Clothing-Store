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
            <h2 class="text-center">{{ $title }}</h2>
            <div class="row">
                <form action="{{ route('admin.images.update',$model->id) }}" enctype="multipart/form-data" method="POST"
                    class="row g-3">
                    @csrf
                    @method('put')
                    <div class="col-md-12">
                        <label for="fullnameInput" class="form-label">Sản phẩm</label>
                        <select class="form-select mb-3" name="product_id" aria-label="Default select example">
                            <option selected disabled>Chọn sản phẩm</option>
                            @foreach ($products as $id => $name)
                                <option value="{{ $id }}" {{ $id == $model->product->id ? 'selected': '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="fullnameInput" class="form-label">Ảnh cho sản phẩm</label>
                        <input type="file" class="form-control" id="file_input" name="link_image"
                            placeholder="Enter your name">
                    </div>
                    <img src="{{ Storage::url($model->link_image)}}" id="img_category" alt="ảnh danh mục" style="width: 150px;">
                
                    <div class="col-12">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">{{ $title }}</button>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function showImage(event) {
                const imgCategory = $('#img_category');
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imgCategory.attr('src', e.target.result);
                        imgCategory.css('display', 'block');
                    }
                    reader.readAsDataURL(file);
                }
            }

            $('#file_input').change(function(event) {
                showImage(event);
            });
        });
    </script>
@endsection
