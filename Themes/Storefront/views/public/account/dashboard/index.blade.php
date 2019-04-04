@extends('public.account.layout')

@section('title', trans('storefront::account.links.dashboard'))

@section('content_right')
    <div class="my-dashboard">
        <div class="account-information clearfix">
            <h4>{{ trans('storefront::account.dashboard.account_information') }}</h4>

            <div class="col-md-6">
                <div class="row">
                    <div class="contact-information">
                        <span>{{ $my->full_name }}</span>
                        <span>{{ $my->email }}</span>

                        <a href="{{ route('account.profile.edit') }}">
                            {{ trans('storefront::account.dashboard.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="recent-orders index-table">
            <h4 class="section-header">
                {{ trans('storefront::account.warranty.warranty_list') }}

                @if ($recentOrders->isNotEmpty())
                    <a href="{{ route('account.orders.index') }}" class="pull-right">
                        {{ trans('storefront::account.dashboard.view_all') }}
                    </a>
                @endif
            </h4>

            @if ($recentOrders->isEmpty())
                <span>{{ trans('storefront::account.warranty.warranty_list') }}</span>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ trans('storefront::account.warranty.w_no') }}</th>
                            <th>{{ trans('storefront::account.warranty.w_producname') }}</th>
                            <th>{{ trans('storefront::account.warranty.w_serial_no') }}</th>
                            <th>{{ trans('storefront::account.warranty.year_warranty') }}</th>
                            <th>{{ trans('storefront::account.warranty.purchase_date') }}</th>
                            <th>{{ trans('storefront::account.warranty.datevarunty_start') }}</th>
                            <th>{{ trans('storefront::account.warranty.datevarunty_start') }}</th>
                            <th>image s/n</th>
                            <th>{{ trans('storefront::account.warranty.status') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach ($recentOrders as $order)
                            <tr>
                                <td>#{{$i}}</td>
                                <td style="text-align: center;">
                                    {{ $order->product->name }}<br/>
                                    <img src="{{ $order->product->base_image->path }}" style="width: 100px;">
                                </td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->varunty_time }} {{ trans('storefront::account.warranty.year') }}  ({{ $order->dateExp() }})</td>
                                <td>{{ $order->PurchaseDate->format('d/m/Y') }}</td>
                                <td>{{ $order->datevarunty_start->format('d/m/Y') }}</td>
                                <td>@if($order->img_product)<img src="{{url('/storage/media/warranty/')}}/{{ $order->img_product }}" style="width: 100px;">@endif</td>
                                <td>
                                    @if($order->cus_use==2)
                                        <span style="color: green;font-weight: 600;">
                                           {{ trans('storefront::account.warranty.activate') }}</span>
                                    @else
                                        <span style="color: red;font-weight: 400;">
                                            {{ trans('storefront::account.warranty.nonactivate') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <?php
                            $i++;
                            ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>


    </div>
@endsection
