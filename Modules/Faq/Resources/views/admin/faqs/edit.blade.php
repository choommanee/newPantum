@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('faq::faqs.faq')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.faqs.index') }}">{{ trans('faq::faqs.faqs') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('faq::faqs.faq')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.faqs.update', $faq) }}" class="form-horizontal" id="faq-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('faq')) !!}
    </form>
@endsection

@push('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function (){
            new nicEditor({fullPanel : true}).panelInstance('body');
        });

    </script>

    <script>
        $('#faq-edit-form').submit(function () {
            // event.preventDefault();
            $('#body').val($('.nicEdit-main').html());
            //alert($('#description').html());

            var delayInMilliseconds = 1000; //1 second

            setTimeout(function() {
                //your code to be executed after 1 second
                $('#faq-edit-form').submit();
            }, delayInMilliseconds);
        });
        $(document).ready(function() { /* code here */
            $('.nicEdit-main').mouseleave(function(){
                //  alert($('.nicEdit-main').html());
                $('#body').val($('.nicEdit-main').html());
            });
        });

    </script>

@endpush
@include('faq::admin.faqs.partials.shortcuts')
