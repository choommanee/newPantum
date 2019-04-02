@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection

@section('content')
    <div class="container-fluid" style="
    margin-top: 0px;
    background: #FFFFFF;
    padding: 25px;
">
    <section class="product-list">
        <div class="row">
            @include('public.products.partials.filter')

            <div class="col-md-9 col-sm-12">
                <div class="product-list-header clearfix">
                    <div class="search-result-title pull-left">
                        @if (request()->has('query'))
                            <h3>{{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"</h3>
                        @else
        {{-- <h3>{{ trans('storefront::products.shop') }}</h3>--}}
    @endif

    <span>{{ intl_number($products->total()) }} {{ trans_choice('storefront::products.products_found', $products->total()) }}</span>
</div>

<div class="search-result-right pull-right">
    <ul class="nav nav-tabs">
        <li class="view-mode {{ ($viewMode = request('viewMode', 'grid')) === 'grid' ? 'active' : '' }}">
            <a href="{{ $viewMode === 'grid' ? '#' : request()->fullUrlWithQuery(['viewMode' => 'grid']) }}" title="{{ trans('storefront::products.grid_view') }}">
                <i class="fa fa-th-large" aria-hidden="true"></i>
            </a>
        </li>

        <li class="view-mode {{ $viewMode === 'list' ? 'active' : '' }}">
            <a href="{{ $viewMode === 'list' ? '#' : request()->fullUrlWithQuery(['viewMode' => 'list']) }}" title="{{ trans('storefront::products.list_view') }}">
                <i class="fa fa-th-list" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
    <div class="form-group showfillter" >
        <label>{{ trans('storefront::products.filter') }}</label>
    </div>
    <div class="form-group" style="display: none">
        <select class="custom-select-black" onchange="location = this.value">
            <option value="{{ request()->fullUrlWithQuery(['sort' => 'relevance']) }}" {{ ($sortOption = request()->query('sort')) === 'relevance' ? 'selected' : '' }}>
                {{ trans('storefront::products.sort_options.relevance') }}
            </option>

            <option value="{{ request()->fullUrlWithQuery(['sort' => 'topRated']) }}" {{ $sortOption === 'topRated' ? 'selected' : '' }}>
                {{ trans('storefront::products.sort_options.top_rated') }}
            </option>

            <option value="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}" {{ $sortOption === 'latest' ? 'selected' : '' }}>
                {{ trans('storefront::products.sort_options.latest') }}
            </option>

            <option value="{{ request()->fullUrlWithQuery(['sort' => 'priceLowToHigh']) }}" {{ $sortOption === 'priceLowToHigh' ? 'selected' : '' }}>
                {{ trans('storefront::products.sort_options.price_low_to_high') }}
            </option>

            <option value="{{ request()->fullUrlWithQuery(['sort' => 'priceHighToLow']) }}" {{ $sortOption === 'priceHighToLow' ? 'selected' : '' }}>
                {{ trans('storefront::products.sort_options.price_high_to_low') }}
            </option>
        </select>
    </div>
</div>
</div>

<div class="clearfix"></div>

<div class="product-list-result clearfix">
<div class="tab-content">
    <div id="grid-view" class="tab-pane {{ ($viewMode = request('viewMode', 'grid')) === 'grid' ? 'active' : '' }}">
        <div class="row">
            <div class="grid-products separator">
                @if ($viewMode === 'grid')
                    @forelse ($products as $product)
                        @include('public.products.partials.product_card1')
                    @empty
                        <h3>{{ trans('storefront::products.no_products_were_found') }}</h3>
                    @endforelse
                @endif
            </div>
        </div>
    </div>

    <div id="list-view" class="tab-pane {{ $viewMode === 'list' ? 'active' : '' }}">
        @if ($viewMode === 'list')
            @forelse ($products as $product)
                @include('public.products.partials.list_view_product_card')
            @empty
                <h3>{{ trans('storefront::products.no_products_were_found') }}</h3>
            @endforelse
        @endif
    </div>
</div>
</div>

<div class="pull-right">
{{ $products->links() }}
</div>
</div>
</div>
</section>
</div>

    <form id="frmSendCompare" method="POST" action="{{ route('compare.index') }}">
    <div id="comparison" class="" >
        <div class="compare-hidden-toggle" ></div>
        <div class="close-btn comparison-close-btn" >×</div>

            {{ csrf_field() }}
            <div class="comparison-wrapper" >
                <div class="comparison-title" >
                    <h3 class="title" >Compare Product</h3>
                    <p class="info">
                        Product added to comparison. Add up to 3 products or proceed to view compare products selected.
                        สินค้าที่เพิ่มลงรายการเปรียบเทียบ สามารถเพิ่มได้ถึง 3 สินค้าหรือกระบวนการเพื่อดูเปรียบเทียบผลิตภัณฑ์ที่เลือก</p>
                </div>
                <div class="comparison-items">
                    <ul class="comparison-ul" >

                    </ul>
                </div>
                <a class="go-to-compare" >Compare Product</a>
            </div>

    </div>
    </form>
@endsection
@push('scripts')
    <script>
        var count = 1;
        var count2 = 1;
        loadItems();
        $('.go-to-compare').click(function () {
           // alert('test');
            $('#frmSendCompare').submit();


        });

        $('.comparison-close-btn').click(function(){
            $( "#comparison" ).addClass('close');
        });

        $('.compare-hidden-toggle').click(function(){
            $( "#comparison" ).removeClass('close')
        });

        function addCompare(obj,pro_id,slug){
            $(obj).find();
            event.preventDefault(); // cancel default behavior
            var data =$(obj).parent('form');
            console.log(data);

            pro_id  = data.find('input[name=product_id]');
            pro_img  = data.find('input[name=product_img]');
            _token  = data.find('input[name=_token]');
            console.log(pro_img.val());
            const person = {
                pro_id: pro_id.val(),
                pro_img: pro_img.val(),
                slug: slug,
            }

            add_item(person)

        }
        function loadItems(action=1) {
            if(action==1){
                $( "#comparison" ).addClass('close');
            }
            count=1;
            html ='';
            if (localStorage.getItem('qaitems')) {
                slitems = JSON.parse(localStorage.getItem('qaitems'));
                $.each(slitems, function () {


                    var item = this;

                    var product_id = item.pro_id;
                    var product_img = item.pro_img;
                    var slug = item.slug;


                    html +='<li class="item" >\n' +
                        '                        <div class="compare-product-info" >\n' +
                        '                            <span class="close" id="cloesCom" onclick="CloseCompare('+product_id+');" data="'+product_id+'"></span>\n' +
                        '                            <a >\n' +
                        '                                <input  type="hidden" name="produc_com[]" id="produc_com[]" value="'+product_id+'"/>\n' +
                        '                                <img class="product-image" src="'+product_img+'" >\n' +
                        '                            </a>\n' +
                        '                            <h4 class="product-title" >\n' +
                        '                                <span > </span>\n' +
                        '                                <span style=" text-transform: uppercase;">'+slug+'</span>\n' +
                        '                            </h4>\n' +
                        '                        </div>\n' +
                        '                    </li>';



                    console.log(item);
                    count++;
                });

            }else{
                count=1;
            }

            $('.comparison-ul').html('');
            $('.comparison-ul').html(html);



        }

        function pushIt() {
            var restoredFruits = JSON.parse(localStorage.getItem('product'));

           // restoredFruits.queue.push(person);
            localStorage.setItem('product', JSON.stringify(restoredFruits));
           // outputIt();
        }

        function add_item(item) {

           // slitems_check = JSON.parse(localStorage.getItem('qaitems'));
            //slitems_check.length;
            $( "#comparison" ).removeClass('close');
            if(count==4){
                alert('รายการเปรียบเทียบของคุณเต็มแล้ว');
                return ;
            }
            if (count == 1) {
                slitems = {};
            }
            if (item == null)
                return;

            var item_id = item.pro_id ;

            slitems[item_id] = item;

            slitems[item_id].order = new Date().getTime();
            localStorage.setItem('qaitems', JSON.stringify(slitems));
            loadItems('2');
            //count++;
            return true;
        }

        function CloseCompare(pro_id) {
            var row = $(this).closest('li');
            delete slitems[pro_id];
            row.remove();
            if(slitems.hasOwnProperty(pro_id)) { } else {
                localStorage.setItem('qaitems', JSON.stringify(slitems));
                loadItems('2');
                return;
            }
        }

        function loadDataCompare(){

        }
    </script>
@endpush
@push('styles')
    <style>
        .close {
            font-weight: normal;
            text-shadow: none;
            float: none;
        }



        #comparison {
            border-top: 2px solid #e6e6e6;
            width: 100%;
            height: 200px;
            background-color: #353537;
            position: fixed;
            bottom: -200px;
            right: 0;
            left: 0;
            z-index: 7;
            transition: all 600ms cubic-bezier(0.165, 0.84, 0.44, 1);
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
        }

        #comparison .compare-hidden-toggle {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 47px;
            height: 0;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: url({{ url('/themes/storefront/public/images/compare-arrow-1.png') }}) 50% 10px no-repeat #efefef;
        }

        #comparison .close-btn {
            position: absolute;
            right: 10%;
            top: 2px;
            font-size: 30px;
            cursor: pointer;
            color: #555;
            z-index: 2;
        }

        #comparison.close .compare-hidden-toggle {
            top: -30px;
            height: 30px;
        }
        #comparison .comparison-wrapper {
            position: relative;
            width: 1170px;
            height: 100%;
            margin: 0 auto;
        }
        #comparison .comparison-title {
            font-size: 12px;
            line-height: 16px;
            width: 25%;
            float: left;
            color: #737373;
        }
        #comparison .title {
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 8px;
            color: #fff;
        }

        #comparison .comparison-title p {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            color : #FFFFFF;
            font: inherit;
            vertical-align: baseline;
        }

        #comparison .comparison-items {
            position: relative;
            float: right;
            padding-top: 10px;
            width: 73%;
        }

        #comparison .comparison-ul {
            float: left;
            padding-left: 0;
            width: 80%;
            margin: 0;
        }

        #comparison .comparison-ul .item {
            position: relative;
            list-style: none;
            float: left;
            margin: 8px 5px 0 5px;
            width: 135px;
            text-align: center;
        }

        #comparison .comparison-ul .item .product-image {
            height: auto;
            margin: 0 auto;
            max-width: 60%;
        }

        #comparison .comparison-ul .item .product-title {
            font-size: 12px;
            margin-top: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #606060;
        }

        #comparison .comparison-ul .item .product-title {
            font-size: 12px;
            margin-top: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #ffffff;
        }
        #af-react .close {
            font-weight: normal;
            text-shadow: none;
            float: none;
        }

        #comparison .comparison-ul .item .close {
            right: 0;
            top: -7px;
            width: 20px;
            height: 20px;
            background: url({{url('/themes/storefront/public/images/compare-close-btn.png')}}) 0 0 no-repeat;
            position: absolute;
        }

        #comparison .comparison-ul .item {
            position: relative;
            list-style: none;
            float: left;
            margin: 8px 5px 0 5px;
            width: 22.9375%;
            text-align: center;
        }

        #comparison .comparison-ul .item .product-image {
            height: auto;
            margin: 0 auto;
            height: 85px;
            width: 85px;
        }

        #comparison .go-to-compare {
            position: absolute;
            right: -30px;
            top: 50%;
            border: 1px solid #00a0e9;
            padding: 7px 30px;
            color: #00a0e9;
            font-size: 12px;
            text-align: center;
            margin-top: -16px;
            transition: all 0.3s;
            border-radius: 4px;
            cursor: pointer;
        }


        #comparison .go-to-compare:hover {
            border: 2px solid #008fd8;
            color: #ffffff;
            background-color: #00a0e9;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
        }


        :root #comparison {
            bottom: -334px \9;
        }
        :root #comparison.close {
            bottom: -334px \9;
        }

        .close, .close:hover {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        #comparison.close {
            bottom: -200px \0\9;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        @media screen and (max-width:1366px){
            #comparison .go-to-compare {

                right: 22px;
                top: 50%;
            }
        }
        @media (max-width: 1200px){

            #comparison .comparison-wrapper {
                width: 97%;
                padding-top: 5px;
            }
            #comparison .comparison-title>.info {
                display: none;
            }

            #comparison .comparison-items {
                float: none;
                width: 100%;
            }

            #comparison .go-to-compare {
                position: absolute;
                top: initial;
                top: inherit \9;
                bottom: 22px;
                right: 15px;
            }

            #comparison .comparison-ul .item {
                margin: 0;
                width: 32.9375%;
            }


        }

        @media only screen and (max-width: 720px){
            #comparison .comparison-title {
                width: 100%;
            }

            #comparison .comparison-ul .item .product-image {
                height: auto;
                margin: 0 auto;
                width: 60%;
                max-width: 60%;
            }
        }

    </style>
@endpush
