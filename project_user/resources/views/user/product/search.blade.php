@extends('layouts.user')
@section('content')
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ url('user/landingpage') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                @include('layouts.sidebar')
                <div class="col-lg-9 order-1 order-lg-2">
                    @php
                        $countProduct = count($product);
                    @endphp
                    @if ($keywordSearch)
                        @if ($countProduct<1) {!! $emptyProduct !!}
                        @else
                            <div class="product-show-option">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7">
                                        <h5 class="search-result">Có <b><i>"{!!  $checkNumber10  !!}"</i></b> kết quả tìm kiếm cho từ khóa: <b><i>"{{ $keywordSearch }}"</i></b></h5>
                                        <div class="select-option">
                                            <select class="sorting">
                                                <option value="">Default Sorting</option>
                                            </select>
                                            {{-- <select class="p-show">
                                                <option value="">Show:</option>
                                            </select> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 text-right">
                                        <p style="margin-top: 62px"><b>Show All {{ $checkNumber10 }} Product</b></p>
                                    </div>
                                </div>
                            </div>
                            {{-- <form action="#" method="GET"> --}}
                                <div class="product-list">
                                    <div class="row">
                                        @foreach ($product as $v)
                                            @foreach ($category_clothing as $v_category_clothing)
                                                @if ($v->categoryclothing_id == $v_category_clothing->id)
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="product-item">
                                                            <div class="pi-pic">
                                                                <a href="{{ url("user/productDetail/$v->id") }}"><img src="{{ $v->img }}" alt=""></a>
                                                                {{-- <div class="sale pp-sale">Sale</div> --}}
                                                            </div>
                                                            <div class="pi-text">
                                                                <div class="catagory-name">{{ $v_category_clothing->title_category_clothing }}</div>
                                                                <h5 class="text-yellow">{{ $v->name }}</h5>
                                                                <div class="product-price">
                                                                    ${{ number_format($v->discount, '0', '', '.') }}
                                                                    <span>${{ number_format($v->price, '0', '', '.') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            {{-- </form> --}}
                                {{-- @if (empty($category)) {{ $product->appends(Request::all())->links() }} @endif --}}
                                {{ $product->appends(Request::all())->links()  }}
                        @endif
                    @else
                        @php
                            echo "Bạn cần nhập tên sản phẩm để tìm kiếm !!!";
                        @endphp
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection