    <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
        <div class="filter-widget">
            <h4 class="fw-title">Categories</h4>
            <ul class="filter-catagories">
                @php
                    $module_active = session('module_active');
                @endphp
                @if (url()->current() == url('user/product/search'))
                    <li><a href="{{ request()->fullUrlWithQuery(['category'=>'men']) }}" class="{{ $module_active == "men" ? "module_active" : "" }}">Men</a></li>
                    <li><a href="{{ request()->fullUrlWithQuery(['category'=>'women']) }}" class="{{ $module_active == "women" ? "module_active" : "" }}">Women</a></li>
                    <li><a href="{{ request()->fullUrlWithQuery(['category'=>'child']) }}" class="{{ $module_active == "child" ? "module_active" : "" }}">Kids</a></li>
                @else
                    <li><a href="{{ url("user/product/collection/men") }}" class="{{ $module_active == "men" ? "module_active" : "" }}">Men</a></li>
                    <li><a href="{{ url('user/product/collection/women') }}" class="{{ $module_active == "women" ? "module_active" : "" }}">Women</a></li>
                    <li><a href="{{ url('user/product/collection/child') }}" class="{{ $module_active == "child" ? "module_active" : "" }}">Kids</a></li>
                @endif
            </ul>
        </div>
        <div class="filter-widget">
            <h4 class="fw-title">Brand</h4>
            <div class="fw-brand-check">
                <div class="bc-item">
                    <label for="bc-calvin">
                        Calvin Klein
                        <input type="checkbox" id="bc-calvin">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="bc-item">
                    <label for="bc-diesel">
                        Diesel
                        <input type="checkbox" id="bc-diesel">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="bc-item">
                    <label for="bc-polo">
                        Polo
                        <input type="checkbox" id="bc-polo">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="bc-item">
                    <label for="bc-tommy">
                        Tommy Hilfiger
                        <input type="checkbox" id="bc-tommy">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-widget">
            <h4 class="fw-title">Price</h4>
            <div class="filter-range-wrap">
                {{-- <div class="range-slider">
                    <div class="price-input">
                        <input type="text" id="minamount">
                        <input type="text" id="maxamount">
                    </div>
                </div>
                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                    data-min="33" data-max="98">
                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                </div> --}}
                <ul class="filterPrice">
                    <li><a class="{{ request()->get('price') == 1 ? "module_active" : "" }}" href="{{ request()->fullUrlWithQuery(['price' => 1]) }}">Less than 1.000$</a></li>
                    <li><a class="{{ request()->get('price') == 2 ? "module_active" : "" }}" href="{{ request()->fullUrlWithQuery(['price' => 2]) }}">1.000$ - 2.000$</a></li>
                    <li><a class="{{ request()->get('price') == 3 ? "module_active" : "" }}" href="{{ request()->fullUrlWithQuery(['price' => 3]) }}">2.000$ - 3.000$</a></li>
                    <li><a class="{{ request()->get('price') == 4 ? "module_active" : "" }}" href="{{ request()->fullUrlWithQuery(['price' => 4]) }}">3.000$ - 4.000$</a></li>
                    <li><a class="{{ request()->get('price') == 5 ? "module_active" : "" }}" href="{{ request()->fullUrlWithQuery(['price' => 5]) }}">4.000$ - 5.000$</a></li>
                    <li><a class="{{ request()->get('price') == 6 ? "module_active" : "" }}" href="{{ request()->fullUrlWithQuery(['price' => 6]) }}">Greater than 5.000$</a></li>
                </ul>
            </div>
        </div>
        <div class="filter-widget">
            <h4 class="fw-title">Color</h4>
            <div class="fw-color-choose">
                <div class="cs-item">
                    <input type="radio" id="cs-black">
                    <label class="cs-black" for="cs-black">Black</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-violet">
                    <label class="cs-violet" for="cs-violet">Violet</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-blue">
                    <label class="cs-blue" for="cs-blue">Blue</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-yellow">
                    <label class="cs-yellow" for="cs-yellow">Yellow</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-red">
                    <label class="cs-red" for="cs-red">Red</label>
                </div>
                <div class="cs-item">
                    <input type="radio" id="cs-green">
                    <label class="cs-green" for="cs-green">Green</label>
                </div>
            </div>
        </div>
        <div class="filter-widget">
            <h4 class="fw-title">Size</h4>
            <div class="fw-size-choose">
                <div class="sc-item">
                    <input type="radio" id="s-size">
                    <label for="s-size">s</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="m-size">
                    <label for="m-size">m</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="l-size">
                    <label for="l-size">l</label>
                </div>
                <div class="sc-item">
                    <input type="radio" id="xs-size">
                    <label for="xs-size">xs</label>
                </div>
            </div>
        </div>
        <div class="filter-widget">
            <h4 class="fw-title">Tags</h4>
            <div class="fw-tags">
                <a href="#">Towel</a>
                <a href="#">Shoes</a>
                <a href="#">Coat</a>
                <a href="#">Dresses</a>
                <a href="#">Trousers</a>
                <a href="#">Men's hats</a>
                <a href="#">Backpack</a>
            </div>
        </div>
    </div>
