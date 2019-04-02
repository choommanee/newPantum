<div id="additional-information" class="specification tab-pane fade in" style="background-color: #f6f6f6;">
    <div class="table-responsive" style="margin-bottom: 20px;">

        <center>
            <h1>Specifications</h1>
            <table class="table" style="width: 90%;">
            <tbody>
            @foreach ($product->attributeSets as $attributeSet => $attributes)
                <tr>
                    <td colspan="2" style="border-bottom: 2px solid #ff000d;"><h4>{{ $attributeSet }}</h4></td>
                </tr>
                <tr>
                    <td width="20px"> </td>
                    <td style="">
                        @foreach ($attributes as $attribute)
                            <div class="information-data clearfix">
                                <label class="pull-left">{{ $attribute->name }}</label>
                                <span>
                                        {{ $attribute->values->implode('value', ', ') }}
                                    </span>
                            </div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
