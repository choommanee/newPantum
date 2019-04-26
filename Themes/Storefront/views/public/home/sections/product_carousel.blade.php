@if ($products->isNotEmpty())
    <!--โปรดักคอเซล-->
    <section class="product-slider-wrapper clearfix">
        <div class="section-header boxtittle" style="background: url({{url('/themes/storefront/public/images/Homepage_05.png')}}) 0 0 no-repeat; ">
            <img src="{{url('/themes/storefront/public/images/product_tittle.png')}}" style="height: 100%;">
        </div>


            <div class="product-slider slick-arrow separator clearfix" style="background-color: #000000;">
                @foreach ($products as $product)
                    <div class="col-md-6 bg_product" style="margin-right: 10px;">
                        @include('public.products.partials.product_card')
                    </div>
                @endforeach
            </div>

    </section>
@endif
