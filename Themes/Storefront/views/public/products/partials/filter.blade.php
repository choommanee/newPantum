<style>
    @media screen and (max-width: 480px){
        .theme-black .btn-primary {
            margin-right: 0px;
            width: 100px;
            margin-top: 0px;
            display: inline-table;
        }
    }

    .btSuggestionSelect{
        border: 1px solid #7d7d7d;
        letter-spacing: .2px;
        -webkit-transition: .2s ease-in-out;
        transition: .2s ease-in-out;
        outline: 0!important;
        margin: 5px;
        line-height: 20px;
        font-size: 12px;padding: 4px;
    }

</style>
<div class="col-md-3 col-sm-12">
    <div class="product-list-sidebar clearfix">
        @include('public.products.partials.category_filter')

        <form method="GET" action="{{ route('products.index') }}" id="product-filter-form">
            <div class="filter-section clearfix">
                <div><h2>Suggest Printer</h2>
                    <div id="dataselect" style="margin-top: 10px;width: 82%;"></div>
                    <div id="lblCleatAll" style="margin-top: 10px;width: 82%;font-size: 12px;text-align: center;color: #031b08;display: none;cursor: pointer;" onclick="uncheckAll();">x clear all fillter</div>

                </div>
            </div>
            @foreach (request()->except(['attribute', 'fromPrice', 'toPrice']) as $query => $value)
                @if (! is_array($value))
                    <input type="hidden" name="{{ $query }}" value="{{ $value }}">
                @endif
            @endforeach

            @foreach ($attributes as $attribute)
                <div class="filter-section clearfix">
                    <h4>{{ $attribute->name }}</h4>

                    <div class="{{ $attribute->values->count() > 5 ? 'filter-scroll' : '' }}">
                        @foreach ($attribute->values as $value)
                            <div class="filter-options">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input  type="checkbox" at_set="att_{{ mb_strtolower(str_replace(' ','_',$attribute->name)) }}" at_id="{{ $value->id }}" at_value="{{ $value->value }}"
                                            name="attribute[{{ mb_strtolower($attribute->name) }}][]"
                                            value="{{ mb_strtolower($value->value) }}"
                                            id="attribute-{{ $value->id }}"
                                            {{ is_filtering($value->value) ? 'checked' : '' }}
                                        >

                                        <label id="txtatt-{{ $value->id }}" for="attribute-{{ $value->id }}">{{ $value->value }} <ss id="total_{{ $value->id }}"> ( 0 ) </ss></label>
                                    </div>
                                </div>
                            </div>
                            @push('scripts')
                              {{--  <script>
                                    totalByfilter = getTotalInfilter('att_{{ mb_strtolower(str_replace(' ','_',$attribute->name)) }}','{{ $value->value }}');
                                    $('#total_{{ $value->id }}').html('( '+totalByfilter+' )');
                                    //console.log(totalByfilter);

                                    if(totalByfilter==0){
                                        $('#attribute-{{ $value->id }}').prop( "disabled", true );
                                        $("#attribute-{{ $value->id }}").css("background", "#f5f5f5");
                                        $("#txtatt-{{ $value->id }}").css("color", "#f5f5f5");
                                    }else{
                                        $('#attribute-{{ $value->id }}').prop( "disabled", false );
                                        $("#attribute-{{ $value->id }}").css("background", "#ffffff");
                                        $("#txtatt-{{ $value->id }}").css("color", "#626060");
                                    }
                                </script>--}}
                            @endpush
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="price-range-picker" style="display: none">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <label for="price-from">{{ trans('storefront::products.from') }}</label>
                            <input type="text" name="fromPrice" class="from-control range-from" id="price-from">
                        </div>

                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <label for="price-to">{{ trans('storefront::products.to') }}</label>
                            <input type="text" name="toPrice" class="from-control range-to" id="price-to">
                        </div>
                    </div>
                </div>

                <div class="slider noUi-target noUi-ltr noUi-horizontal" id="price-range-slider" data-to-price="{{ request('toPrice', $maxPrice) }}" data-max="{{ $maxPrice }}">
                    <div class="noUi-base">
                        <div class="noUi-connects"></div>
                    </div>
                </div>
            </div>


            <div style="clear: both;"></div>
        </form>
    </div>
</div>
