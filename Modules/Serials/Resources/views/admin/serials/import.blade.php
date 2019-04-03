@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('serials::serials.import'))

    <li><a href="{{ route('admin.serials.index') }}">{{ trans('serials::serials.serials') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('serials::serials.serial')]) }}</li>
@endcomponent

@section('content')
    <a href="{{ url('admin/serials/export/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <form method="POST" action="{{ route('admin.serials.import') }}" class="form-horizontal" id="serial-create-form" novalidate enctype="multipart/form-data">
        {{ csrf_field() }}

        {!! $tabs->render(compact('serial')) !!}
    </form>
@endsection

@include('serials::admin.serials.partials.shortcuts')
