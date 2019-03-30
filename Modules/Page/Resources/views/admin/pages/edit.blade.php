@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('page::pages.page')]))
    @slot('subtitle', $page->title)

    <li><a href="{{ route('admin.pages.index') }}">{{ trans('page::pages.pages') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('page::pages.page')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.pages.update', $page) }}" class="form-horizontal" id="page-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('page')) !!}
    </form>
@endsection


@push('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function (){
            new nicEditor({fullPanel : true}).panelInstance('body');
        });

    </script>

    <script>
        $('#page-edit-form').submit(function () {
            //event.preventDefault();
            $('#body').val($('.nicEdit-main').html());
            //alert($('#description').html());

            var delayInMilliseconds = 1000; //1 second

            setTimeout(function() {
                //your code to be executed after 1 second
                $('#page-edit-form').submit();
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


@include('page::admin.pages.partials.shortcuts')
