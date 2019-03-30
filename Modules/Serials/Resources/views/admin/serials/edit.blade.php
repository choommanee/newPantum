@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('serials::serials.serial')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.serials.index') }}">{{ trans('serials::serials.serials') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('serials::serials.serial')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.serials.update', $serial) }}" class="form-horizontal" id="serial-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('serial')) !!}
    </form>
@endsection

@include('serials::admin.serials.partials.shortcuts')
