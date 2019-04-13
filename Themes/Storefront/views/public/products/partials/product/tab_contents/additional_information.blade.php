<div id="additional-information" class="specification tab-pane fade in" style="background-color: #f6f6f6;">
    <div class="table-responsive" style="margin-bottom: 20px; text-align: center">


            <h1>Specifications</h1>
            <table class="table" style="width: 90%;margin: 0 auto;">
            <tbody>
            @foreach ($product->attributeSets as $attributeSet => $attributes)
                <tr>
                    <td style="border-bottom: 2px solid #ff000d;"><h4>{{ $attributeSet }}</h4></td>
                </tr>
                <tr>
                    <td style="">
                        @foreach ($attributes as $attribute)
                            <div class="information-data clearfix">
                                <div class="col-12 col-md-3 col-lg-3 mb-3 text-md-left" style="font-size: 15px;font-weight: 700;">{{ $attribute->name }}</div>
                                <div class="col-12 col-md-9 col-lg-7 mb-3 text-md-left" style="font-size: 15px;margin-left:10px; ">
                                        {{ $attribute->values->implode('value', ', ') }}
                                    </div>
                            </div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
