@foreach ($products as $item)
    <div data-id="{{ $item->id }}" class="col-lg-25 product-wrapper in-category p-ivt p-{{ $item->id }}">
        <div class="product-information">
            <div class="col-lg-4 col-md-4 col-xs-6 col-sm-6 box_tab_index prdWrapper" data-pid="{{ $item->id }}">
                <div class="box-product">
                    <div class="inner-item sold-out">
                        <div class="p-image clearfix">
                            <a class="a-image" href="{{ route('home.detail', $item->id) }}">
                                @foreach ($item->image as $image)
                                    <img src="{{ Storage::url($image->link_image) }}"
                                        class="attachment-medium size-medium wp-post-image" alt="{{ $item->name }}" />
                                @endforeach
                            </a>
                            <div class="btn-quickview tp_button" data-psId="37834087">
                                <i class="fal fa-eye"></i>
                                <span>
                                    <a href="{{ route('home.detail', $item->id) }}">Xem Ngay</a>
                                </span>
                            </div>
                        </div>
                        <div class="box-text">
                            <p class="title">
                                <a class="tp_product_name" href="{{ route('home.detail', $item->id) }}"
                                    title="{{ $item->name }}">
                                    {{ $item->name }}
                                </a>
                            </p>
                            <p class="price">
                                <strong class="f-left">
                                    <span class="tp_product_price">{{ number_format($item->price) }}đ</span>
                                </strong>
                            </p>
                            <p class="discount-percent"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
