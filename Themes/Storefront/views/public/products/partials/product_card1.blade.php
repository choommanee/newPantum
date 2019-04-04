<!--โปรดักการ์ด-->
<div class="product-image1 clearfix col-md-3">
<a href="{{ route('products.show', $product->slug) }}" class="product-card">
    <div class="product-card-inner">
        <div class="product-image clearfix col-md-12">
            <ul class="product-ribbon list-inline">
                @if ($product->isOutOfStock())
                    <li><span class="ribbon bg-red">{{ trans('storefront::product_card.out_of_stock') }}</span></li>
                @endif

                @if ($product->isNew())
                    <li><span class="ribbon bg-green">{{ trans('storefront::product_card.new') }}</span></li>
                @endif
            </ul>

            @if (! $product->base_image->exists)
                <div class="image-placeholder">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </div>
            @else

                <div class="image-holder"  style="height: 150px">
                    <img src="{{ $product->base_image->path }}">
                </div>
            @endif


        </div>

        <div class="clearfix col-md-12" style="text-align: center">
            <div class="box_compare">
                <form method="POST" action="{{ route('compare.store') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="product_img" value="{{ $product->base_image->path }}">
                    <input type="hidden" name="product_name" value="{{ $product->name }}">

                    <button onclick="addCompare(this,'{{ $product->id }}','{{ $product->slug }}','');return ;" type="button" id="compare" data-value="{{ $product->id }}" class="btn btn-compare" data-toggle="tooltip" data-placement="left" title="{{ trans('storefront::product_card.add_to_compare') }}">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i> {{ trans('storefront::compare.compare') }}
                    </button>
                </form>
            </div>
            {{--<span class="product-price">{{ product_price($product) }}</span>--}}
            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">{{ $product->name }}</span><br/>
            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">{{ $product->short_description }}</span>
            <a style="margin-top: 20px;margin-left: 18px;margin-bottom: 20px;" href="{{ route('products.show', $product->slug) }}" class="btn btn-danger animate ">
                more
            </a>
        </div>
{{--
        <div class="add-to-actions-wrapper">
            <form method="POST" action="{{ route('wishlist.store') }}">
                {{ csrf_field() }}

                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button type="submit" class="btn btn-wishlist" data-toggle="tooltip" data-placement="right" title="{{ trans('storefront::product_card.add_to_wishlist') }}">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </button>
            </form>

            @if ($product->options_count > 0)
                <button class="btn btn-default btn-add-to-cart" onClick="location = '{{ route('products.show', ['slug' => $product->slug]) }}'">
                    {{ trans('storefront::product_card.view_details') }}
                </button>
            @else
                <form method="POST" action="{{ route('cart.items.store') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="qty" value="1">

                    <button class="btn btn-default btn-add-to-cart" {{ $product->isOutOfStock() ? 'disabled' : '' }}>
                        {{ trans('storefront::product_card.add_to_cart') }}
                    </button>
                </form>
            @endif

            <form method="POST" action="{{ route('compare.store') }}">
                {{ csrf_field() }}

                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button type="submit" class="btn btn-compare" data-toggle="tooltip" data-placement="left" title="{{ trans('storefront::product_card.add_to_compare') }}">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </button>
            </form>
        </div>--}}
    </div>
</a>
</div>
