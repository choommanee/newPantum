@if ($products->isNotEmpty())
    <!--โปรดักคอเซล-->
    <section class="product-slider-wrapper clearfix">
        <div class="section-header boxtittle2" style="">
            <img src="{{url('/themes/storefront/public/images/product_tittle.png')}}" >
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
