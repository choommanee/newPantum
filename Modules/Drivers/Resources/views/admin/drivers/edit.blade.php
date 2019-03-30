@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('drivers::drivers.driver')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.drivers.index') }}">{{ trans('drivers::drivers.drivers') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('drivers::drivers.driver')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.drivers.update', $driver) }}" class="form-horizontal" id="driver-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('driver')) !!}
    </form>
@endsection

@include('drivers::admin.drivers.partials.shortcuts')
