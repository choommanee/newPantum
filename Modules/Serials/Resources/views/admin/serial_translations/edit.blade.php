@extends('admin::master')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('serials::serial_translations.serial_translations')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.serial_translations.index') }}">{{ trans('serials::serial_translations.serial_translations') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('serials::serial_translations.serial_translations')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.serial_translations.update', $serial_translations) }}" class="form-horizontal" id="serial_translations-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}
    </form>
@endsection

@include('serials::admin.serial_translations.partials.shortcuts')
