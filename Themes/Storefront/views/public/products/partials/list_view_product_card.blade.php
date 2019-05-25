<div class="product-card-list clearfix product-image1"   @foreach($product->attributeSets as $attributeSet => $attributes)
@foreach ($attributes as $attribute)
@if($attribute->attribute->is_filterable===true)
att_{{ mb_strtolower(str_replace(' ','_',$attribute->name)) }}="{{ $attribute->values->implode('value', ', ') }}"
    @endif
    @endforeach
    @endforeach style="    height: 150px;">
    <a class="product-image pull-left" href="{{ route('products.show', $product->slug) }}">
        <ul class="product-ribbon list-inline">
            @if ($product->isOutOfStock())
                <li><span class="ribbon bg-red">{{ trans('storefront::product_card.out_of_stock') }}</span></li>
            @endif
        </ul>

        @if (! $product->base_image->exists)
            <div class="image-placeholder">
                <i class="fa fa-picture-o" aria-hidden="true"></i>
            </div>
        @else
            <div class="image-holder">
                <img src="{{ $product->base_image->path }}">
            </div>
        @endif
    </a>

    <div class="product-content clearfix">
        <div class="product-content-inner">
            <a href="{{ route('products.show', $product->slug) }}" class="product-name">
                <h5>{{ $product->name }}</h5>
            </a>
            <p>{{ $product->short_description }}</p>
        </div>

        <div class="product-card-buttons">
            {{--<form method="POST" action="{{ route('wishlist.store') }}">
                {{ csrf_field() }}

                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button type="submit" data-toggle="tooltip" data-placement="top" title="{{ trans('storefront::product_card.add_to_wishlist') }}" class="btn btn-wishlist">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </button>
            </form>--}}

            <form method="POST" action="{{ route('compare.store') }}">
                {{ csrf_field() }}


                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="product_img" value="{{ $product->base_image->path }}">
                <input type="hidden" name="product_name" value="{{ $product->name }}">
                <button onclick="addCompare(this,'{{ $product->id }}','{{ $product->slug }}','');return ;" type="button" id="compare" data-value="{{ $product->id }}" class="btn btn-compare" data-toggle="tooltip" data-placement="left" title="{{ trans('storefront::product_card.add_to_compare') }}">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </button>
            </form>
                <a href="{{ route('products.show', ['slug' => $product->slug]) }}" class="btn btn-primary" style="margin-top: 1px;">
                    {{ trans('storefront::product_card.view_details') }}
                </a>

        </div>
    </div>
</div>
