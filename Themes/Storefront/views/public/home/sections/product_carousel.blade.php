@if ($products->isNotEmpty())
    <!--โปรดักคอเซล-->
    <section class="product-slider-wrapper clearfix">
        <div class="section-header boxtittle">
            <h3><a href="{{route('products.index')}}" >{{ $title }}</a></h3>
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
