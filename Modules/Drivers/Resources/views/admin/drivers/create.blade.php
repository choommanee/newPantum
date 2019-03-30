@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('drivers::drivers.driver')]))

    <li><a href="{{ route('admin.drivers.index') }}">{{ trans('drivers::drivers.drivers') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('drivers::drivers.driver')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.drivers.store') }}" class="form-horizontal" id="driver-create-form" novalidate>
        {{ csrf_field() }}

        {!! $tabs->render(compact('driver')) !!}
    </form>
@endsection

@include('drivers::admin.drivers.partials.shortcuts')
