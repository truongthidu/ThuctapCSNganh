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
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <form id="formOrder" method="GET">
                                    <div class="select-option">
                                        <select class="sorting" name="orderBy">
                                            <option sort="1" {{ request()->get('orderBy') == "prodDefault" || !request()->get('orderBy') ? "selected='selected'" : "" }} value="prodDefault">Default</option>
                                            <option sort="2" {{ request()->get('orderBy') == "prodIverseAlphaB" ? "selected='selected'" : "" }} value="prodIverseAlphaB">Name: Z->A</option>
                                            <option sort="3" {{ request()->get('orderBy') == "priceHighToLow" ? "selected='selected'" : "" }} value="priceHighToLow">Price: High to Low</option>
                                            <option sort="4" {{ request()->get('orderBy') == "priceLowToHigh" ? "selected='selected'" : "" }} value="priceLowToHigh">Price: Low to High</option>
                                            <option sort="5" {{ request()->get('orderBy') == "prodLatest" ? "selected='selected'" : "" }} value="Lates">Lates</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show All: <b>{{ $checkNumber10 }} Product</b></p>
                            </div>
                        </div>
                    </div>
                    {{-- <form action="#" method="GET"> --}}
                        <div class="product-list">
                            <div class="row">
                                @foreach ($product as $v)
                                    @if ($indexCollection == $v->collection)
                                        @foreach ($category_clothing as $v_category_clothing)
                                            @if ($v->categoryclothing_id == $v_category_clothing->id)
                                                <div class="col-lg-4 col-sm-6">
                                                    <div class="product-item filterProduct">
                                                        <div class="pi-pic">
                                                            <a href="{{ url("user/productDetail/$v->id") }}"><img src="{{ asset("img/products/$v->img") }}" alt=""></a>
                                                            {{-- <div class="sale pp-sale">Sale</div> --}}
                                                        </div>
                                                        <div class="pi-text">
                                                            <div class="catagory-name">{{ $v_category_clothing->title_category_clothing }}</div>
                                                            <h5>{{ $v->name }}</h5>
                                                            <div class="product-price">
                                                                ${{ number_format($v->discount, '0', '', '.') }}
                                                                <span>${{ number_format($v->price, '0', '', '.') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    {{-- </form> --}}
                    {{ $product->appends(Request::all())->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection
@section('script')
    <script>
        $(function(){
            $(".sorting").change(function(){
                $("#formOrder").submit();
                // window.location.href = window.location.href+"?orderBy="+$(this).val()+"&sort="+this.options[this.selectedIndex].getAttribute('sort');
                // alert(this.options[this.selectedIndex].getAttribute('hidden'));
            });
        })
    </script>
@endsection