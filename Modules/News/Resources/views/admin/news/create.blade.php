@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('news::news.news')]))

    <li><a href="{{ route('admin.news.index') }}">{{ trans('news::news.news') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('news::news.news')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.news.store') }}" class="form-horizontal" id="news-create-form" novalidate>
        {{ csrf_field() }}

        {!! $tabs->render(compact('news')) !!}
    </form>
@endsection

@include('news::admin.news.partials.shortcuts')
