@extends('layouts.client')
@section('title')
    Tất cả đơn hàng của bạn
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row " style="    display: flex;
    justify-content: center;
    align-items: center;">
            <!-- Căn giữa cột -->
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title mb-0 text-center">{{ $title }}</h2>
                    </div>

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="table-responsive table-card mt-3 mb-1 justify-content-center align-items-center">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <table class="table align-middle table-nowrap mx-auto" id="customerTable">
                                    <!-- Thêm lớp mx-auto -->
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sort" data-sort="customer_name">Id</th>
                                            <th class="sort" data-sort="email">Mã đơn hàng</th>

                                            <th class="sort" data-sort="email">Ngày đặt</th>
                                            <th class="sort" data-sort="email">Tổng tiền</th>
                                            <th class="sort" data-sort="email">Trạng thái đơn hàng</th>
                                            <th class="sort" data-sort="email">sản phẩm</th>
                                            <th class="sort" data-sort="email">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($data as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->code_order }}</td>
                                                <td>{{ $order->booking_date }}</td>
                                                <td>{{ number_format($order->totak) }} đ</td>
                                                <td>
                                                    @foreach ($order_status as $status)
                                                        {{ $status->id === $order->order_status_id ? $status->name : '' }}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($order->orderDetails as $detail)
                                                        <div>
                                                            @foreach ($detail->product->image as $image)
                                                                <img src="{{ Storage::url($image->link_image) }}"
                                                                    width="50px" alt="">
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if ($order->order_status_id == 1)
                                                        <a href="{{ route('home.cancel', $order->id) }}"
                                                            onclick="return confirm('Bạn chắc chắn muốn hủy đơn?')"
                                                            class="btn btn-danger">Hủy đơn</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a"
                                            style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find
                                            any orders for you search.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascript:void(0);">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
