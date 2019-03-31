@extends('public.layout')

@section('title', trans('storefront::compare.compare'))

@section('content')
    <div class="container">
        <style>
            .comparison {
                max-width: 98%;
                margin:0 auto;
                text-align:center;
                padding:10px;
            }

            .comparison table {
                width:100%;
                border-collapse: collapse;
                border-spacing: 0;
                table-layout: fixed;
                border-bottom:1px solid #CCC;
            }

            .comparison td, .comparison th {
                border-right:1px solid #CCC;
                empty-cells: show;
                padding:10px;
            }

            .compare-heading {
                font-size:18px;
                font-weight:bold !important;
                border-bottom:0 !important;
                border-top: 1px solid #d4d3d3;
                padding-top:10px !important;
            }

            .comparison tbody tr:nth-child(odd) {
                display:none;
            }

            .comparison .compare-row {
                background:#fffcfc;
            }

            .comparison .tickblue {
                color:#0078C1;
            }

            .comparison .tickgreen {
                color:#009E2C;
            }

            .comparison th {
                font-weight:normal;
                padding:0;
                border-bottom:1px solid #CCC;
            }

            .comparison tr td:first-child {
                text-align:right;
                color: #181717;


            }
            .comparison a {
                color: #181717;
                text-decoration: none;
            }
            .comparison .qbse, .comparison .qbo, .comparison .tl {
                color: #121111;
                padding: 10px;
                font-size: 22px;
                border-right:1px solid #CCC;
                border-bottom:0;
                text-align: right;
            }

            .comparison .tl2 {
                border-right:0;
            }

            .comparison .qbse {
                background:#0078C1;
                border-top-left-radius: 3px;
                border-left:0px;
            }

            .comparison .qbo {
                background:#009E2C;
                border-top-right-radius: 3px;
                border-right:0px;
            }

            .comparison .price-info {
                padding:5px 15px 15px 15px;
            }

            .comparison .price-was {
                color:#999;
                text-decoration: line-through;
            }

            .comparison .price-now, .comparison .price-now span {
                color:#ff5406;
            }

            .comparison .price-now span {
                font-size:32px;
            }

            .comparison .price-small {
                font-size: 18px !important;
                position: relative;
                top: -11px;
                left: 2px;
            }

            .comparison .price-buy {
                background:#ff5406;
                padding:10px 20px;
                font-size:12px;
                display:inline-block;
                color:#FFF;
                text-decoration:none;
                border-radius:3px;
                text-transform:uppercase;
                margin:5px 0 10px 0;
            }

            .comparison .price-try {
                font-size:12px;
            }

            .comparison .price-try a {
                color:#202020;
            }

            table {border-collapse:collapse; table-layout:fixed; width:310px;}
            table td {border:1px solid #CCC; width:100px; word-wrap:break-word;}
            @media (max-width: 767px) {
                .comparison td:first-child, .comparison th:first-child {
                    display: none;
                }
                .comparison tbody tr:nth-child(odd) {
                    display:table-row;
                    background:#F7F7F7;
                }
                .comparison .row {
                    background:#FFF;
                }
                .comparison td, .comparison th {
                    border:1px solid #CCC;
                }
                .price-info {
                    border-top:0 !important;

                }

            }

            @media (max-width: 639px) {
                .comparison .price-buy {
                    padding:5px 10px;
                }
                .comparison td, .comparison th {
                    padding:10px 5px;
                }
                .comparison .hide-mobile {
                    display:none;
                }
                .comparison .price-now span {
                    font-size:16px;
                }

                .comparison .price-small {
                    font-size: 16px !important;
                    top: 0;
                    left: 0;
                }
                .comparison .qbse, .comparison .qbo {
                    font-size:12px;
                    padding:10px 5px;
                }
                .comparison .price-buy {
                    margin-top:10px;
                }
                .compare-heading {
                    font-size:13px;
                }
            }

        </style>
    <section class="compare" style="background: #fffcfc;margin-top: 30px;min-height: 600px;margin-bottom: 30px;padding-top: 35px;">
        @if ($compare->hasAnyProduct())
            <div style="background: #fffcfc;margin-top: 0px;min-height: 55px;margin-left: 10px;"><h1>Product {{trans('storefront::compare.compare')}}</h1></div>
            <div class="comparison">
                <?php
                //  print_r(count($compare->products()));
                $totalCom = count($compare->products());
                $totalSplit = 80/count($compare->products());
                ?>
                <table>
                    <thead>
                    <tr>
                        <th class="tl">{{ trans('storefront::compare.product_overview') }}</th>
                        @foreach ($compare->products() as $product)

                            <th class="compare-heading" >
                                <form method="POST" action="{{ route('compare.destroy', $product) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}

                                    <button type="submit" class="cross-button">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </form>
                                @if (! $product->base_image->exists)
                                    <div class="image-placeholder">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                @else
                                    <div class="image-holder">
                                        <img src="{{ $product->base_image->path }}">
                                    </div>
                                @endif

                                <h5 style="text-align: center;">
                                    <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                </h5>


                            </th>
                        @endforeach
                    <tr>
                </thead>
                <tbody>
                @foreach ($compare->attributes() as $attribute)
                    <tr>
                        <td></td>
                        <td colspan="{{ $totalCom }}">{{ $attribute->name }}</td>
                    </tr>
                    <tr class="compare-row">
                        <td ><b>{{ $attribute->name }}</b></td>
                        @foreach ($compare->products() as $product)
                            @if ($product->hasAttribute($attribute))
                                <td>{{ $product->attributeValues($attribute) }}</td>
                            @else
                                <td>&ndash;</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach

                </tbody>
                    <tfoot>
                    <tr class="compare-row">
                        <td> </td>

                        @foreach ($compare->products() as $product)
                            <td>
                                <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary">
                                    {{ trans('storefront::compare.view_details') }}
                                </a>

                            </td>
                        @endforeach
                    </tr>
                    </tfoot>
                </table>
            </div>

        @else
            <h2 class="text-center">{{ trans('storefront::compare.no_product') }}</h2>

            <a href="{{ url()->previous() }}" class="go-back-link">
                <i class="fa fa-reply" aria-hidden="true"></i>
                {{ trans('storefront::compare.go_back') }}
            </a>
        @endif
    </section>
@endsection



