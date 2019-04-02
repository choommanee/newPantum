@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('product::products.product')]))

    <li><a href="{{ route('admin.products.index') }}">{{ trans('product::products.products') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('product::products.product')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.products.store') }}" class="form-horizontal" id="product-create-form" novalidate>
        {{ csrf_field() }}

        {!! $tabs->render(compact('product')) !!}
    </form>
@endsection

@push('scripts')

    <!-- NicEditor -->

    <script type="text/javascript">

        $('.price').hide();
        $('.inventory').hide();
        $('.cross_sells').hide();
        $('.up_sells').hide();
        $('.related_products').hide();

        bkLib.onDomLoaded(function (){
            new nicEditor({fullPanel : true}).panelInstance('description');
        });

    </script>

    <script>
        $('#product-create-form').submit(function () {
            event.preventDefault();
            $('#description').val($('.nicEdit-main').html());
            //alert($('#description').html());

            var delayInMilliseconds = 1000; //1 second

            setTimeout(function() {
                //your code to be executed after 1 second
                $('#product-create-form').submit();
            }, delayInMilliseconds);
        });
        $(document).ready(function() { /* code here */
            $('.nicEdit-main').mouseleave(function(){
                //  alert($('.nicEdit-main').html());
                $('#description').val($('.nicEdit-main').html());
            });
        });

    </script>
@endpush

@include('product::admin.products.partials.shortcuts')
