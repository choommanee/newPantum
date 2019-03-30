@extends('admin::master')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('serials::serial_translations.serial_translations')]))

    <li><a href="{{ route('admin.serial_translations.index') }}">{{ trans('serials::serial_translations.serial_translations') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('serials::serial_translations.serial_translations')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.serial_translations.store') }}" class="form-horizontal" id="serial_translations-create-form" novalidate>
        {{ csrf_field() }}
    </form>
@endsection

@include('serials::admin.serial_translations.partials.shortcuts')
