<div class="row">
    <div class="col-md-8">
        {{ Form::select('pro_id', 'Product', $errors, $productdata, $serial, ['required' => true]) }}
        {{ Form::text('name', 'SN', $errors, $serial, ['required' => true]) }}
        {{ Form::file('fileserial', 'Excel Serial Name', $errors, $serial, ['required' => true]) }}

        {{ Form::text('varunty_time', 'warranty (year)', $errors, $serial, ['required' => true]) }}
        <input type="hidden" name="body" id="body" value="1"/>
        <input type="hidden" name="is_active" id="is_active" value="1"/>
        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">Status</label>
            <div class="col-md-9">
                <select name="cus_use" id="cus_use">
                    <option value="0" @if($serial->cus_use) selected @endif>Not use</option>
                    <option value="1"  @if($serial->cus_use==1) selected @endif>Variable</option>
                    <option value="2" @if($serial->cus_use==2) selected @endif>Activate</option>
                    <option value="3" @if($serial->cus_use==3) selected @endif>Not Activate</option>
                </select>
            </div>
        </div>
        <div class="form-group ">
        <label for="to" class="col-md-3 control-label text-left">Start Date</label>
        <div class="col-md-9">
            <input type="text" name="datevarunty_start" class="form-control datetime-picker" id="datevarunty_start" data-default-date="{{$serial->datevarunty_start}}">
        </div>
        </div>

        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">User Id</label>
            <div class="col-md-9">
                <input type="text" name="user_id" value="{{$serial->user_id}}"  id="user_id" readonly>
            </div>
        </div>

        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">Reseller Name</label>
            <div class="col-md-9">
                <input type="text" name="ResellerName" id="ResellerName" value="{{$serial->ResellerName}}" readonly>
            </div>
        </div>
        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">Reseller Address</label>
            <div class="col-md-9">
                <input type="text" name="ResellerAddress" id="ResellerAddress" value="{{$serial->ResellerAddress}}"  readonly>
            </div>
        </div>

        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">Reseller Phone</label>
            <div class="col-md-9">
                <input type="text" name="ResellerPhone" id="ResellerPhone" value="{{$serial->ResellerPhone}}" readonly>
            </div>
        </div>

        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">Purchase Date</label>
            <div class="col-md-9">
                <input type="text" name="PurchaseDate" class="form-control datetime-picker" id="PurchaseDate" data-default-date="{{$serial->PurchaseDate}}">
            </div>
        </div>

        <div class="form-group ">
            <label for="to" class="col-md-3 control-label text-left">Images SN</label>
            <div class="col-md-9">
                @if($serial->img_product)<img src="{{url('/storage/media/warranty/')}}/{{ $serial->img_product }}" style="width: 100px;">@endif
            </div>
        </div>
    </div>
</div>
