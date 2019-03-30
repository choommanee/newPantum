@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('serials::serials.serial')]))

    <li><a href="{{ route('admin.serials.index') }}">{{ trans('serials::serials.serials') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('serials::serials.serial')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.serials.store') }}" class="form-horizontal" id="serial-create-form" novalidate>
        {{ csrf_field() }}

        {!! $tabs->render(compact('serial')) !!}
    </form>
@endsection

@include('serials::admin.serials.partials.shortcuts')
