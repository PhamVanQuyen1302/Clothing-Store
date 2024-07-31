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
    <div class="w-100 d-flex justify-content-center align-items-center">
        <div class="col-10">
            <h2 class="text-center">{{ $title }}</h2>
            <div class="row">
                <form action="{{ route('admin.products.update',$model->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                        <option selected disabled>Chọn danh mục cho sản phẩm</option>
                        @foreach ($categories as $id => $name)
                            <option value="{{ $id }}" {{ ($id == $model->category->id ? 'selected' : '')}}>{{ $name }}</option>
                        @endforeach
                    </select>
                       @error('category_id')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <select class="form-select mb-3" name="status" aria-label="Default select example">
                        <option selected disabled>Chọn trạng thái cho sản phẩm</option>
                        <option value="1" {{ $model->status == 1 ? 'selected' : '' }}>còn Hàng</option>
                        <option value="0" {{ $model->status == 0 ? 'selected' : '' }}>hết Hàng</option>
                    </select>
                       @error('status')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="employeeName" name="name"
                            value="{{ $model->name }}"    
                        placeholder="Enter emploree name">
                    </div>
                       @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Giá sản phẩm</label>
                        <input type="number" class="form-control" id="employeeName" name="price"
                            value="{{ $model->price }}"    
                        placeholder="Enter emploree name">
                    </div>
                       @error('price')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Giá khuyến mại</label>
                        <input type="number" class="form-control" id="employeeName" name="promotional_price"
                            value="{{ $model->promotional_price }}"    
                        placeholder="Enter emploree name">
                    </div>
                    
                       @error('promotional_price')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Số lượng sản phẩm</label>
                        <input type="number" class="form-control" id="employeeName" name="quantity"
                            value="{{ $model->quantity }}"    
                        placeholder="Enter emploree name">
                    </div>
                       @error('quantity')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Ngày Nhập</label>
                        <input type="date" class="form-control" id="employeeName" name="date"
                            value="{{ $model->date }}"    
                        placeholder="Enter emploree name">
                    </div>
                       @error('date')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Mô tả sản phẩm</label>
                        <textarea class="form-control" id="productDescription" name="description" rows="4"
                            placeholder="Nhập mô tả sản phẩm">{{ $model->description}}</textarea>
                    </div>
                       @error('description')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Cập nhập sản phẩm</button>
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
