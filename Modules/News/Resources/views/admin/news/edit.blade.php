@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('news::news.news')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.news.index') }}">{{ trans('news::news.news') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('news::news.news')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.news.update', $news) }}" class="form-horizontal" id="news-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('news')) !!}
    </form>
@endsection

@include('news::admin.news.partials.shortcuts')
