@if ($products->isNotEmpty())
    <!--โปรดักคอเซล-->
    <section class="product-slider-wrapper clearfix">
        <div class="section-header boxtittle">
            <h3><a href="{{route('products.index')}}" >{{ $title }}</a></h3>
        </div>


            <div class="product-slider slick-arrow separator clearfix">
                @foreach ($products as $product)
                    <div class="col-md-6 bg_product">
                        @include('public.products.partials.product_card')
                    </div>
                @endforeach
            </div>

    </section>
@endif
