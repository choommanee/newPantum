@extends('public.account.layout')

@section('title', trans('storefront::account.links.warranty_add'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.links.warranty_add') }}</li>
@endsection

@section('content_right')
    <form method="POST" action="{{ route('account.warranty.addwarranty') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="account-details">
            <div class="account clearfix">
                <h4>{{ trans('storefront::account.warranty.warranty_add') }} </h4>
                @if($errors->any())
                    <h4 style="color: red;">{{$errors->first()}}</h4>
                @endif
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->has('w_serial_no') ? 'has-error': '' }}">
                            <label for="first-name">
                                {{ trans('storefront::account.warranty.w_serial_no') }}<span>*</span>
                            </label>

                            <input type="text" name="w_serial_no" id="first-name" class="form-control" value=""  placeholder=" {{ trans('storefront::account.warranty.w_serial_no') }}">

                            {!! $errors->first('w_serial_no', '<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('w_producname') ? 'has-error': '' }}">
                            <label for="last-name">
                                {{ trans('storefront::account.warranty.w_producname') }}<span>*</span>
                            </label>

                            <select name="w_producname" id="w_producname">
                                <option>{{ trans('storefront::account.warranty.select_product') }}</option>
                                @foreach($product_option as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach

                            </select>

                            {!! $errors->first('w_producname', '<span class="error-message">:message</span>') !!}
                        </div>
                        <div class="form-group  {{ $errors->has('reseller_name') ? 'has-error': '' }}">
                            <label for="">
                                {{ trans('storefront::account.warranty.reseller_name') }}<span>*</span>
                            </label>

                            <input type="text" name="reseller_name" id="reseller_name" class="form-control" value="">

                            {!! $errors->first('reseller_name', '<span class="error-message">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label for="">
                                {{ trans('storefront::account.warranty.reseller_address') }}
                            </label>

                            <input type="text" name="reseller_address" id="reseller_address" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="">
                                {{ trans('storefront::account.warranty.reseller_phone_number') }}
                            </label>

                            <input type="text" name="reseller_phone_number" id="reseller_phone_number" class="form-control" value="" placeholder="{{ trans('storefront::account.warranty.reseller_phone_number') }}">


                        </div>
                        <div class="form-group {{ $errors->has('purchase_date') ? 'has-error': '' }}">
                            <label for="">
                                {{ trans('storefront::account.warranty.purchase_date') }}<span>*</span>
                            </label>

                            <input type="date" name="purchase_date" value="" class="form-control datetime-picker flatpickr-input" id="purchase_date" >
                            {!! $errors->first('reseller_phone_number', '<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('img_product') ? 'has-error': '' }}" >
                            <input type="file" name="img_product" class="form-control">

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary" data-loading>
            {{ trans('storefront::account.warranty.save_changes') }}
        </button>
    </form>

@endsection
