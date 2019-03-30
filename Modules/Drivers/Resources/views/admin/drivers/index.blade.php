@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('drivers::drivers.drivers'))

    <li class="active">{{ trans('drivers::drivers.drivers') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'drivers')
    @slot('name', trans('drivers::drivers.driver'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')
                <th>Product Name</th>
                <th>Driver name</th>
                <th>Driver Detail</th>
                <th>Driver Url</th>
                <th>Status</th>
            </tr>
        @endslot
    @endcomponent
@endcomponent

@push('scripts')
    <script>
        new DataTable('#drivers-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                //
                { data: 'product_name', name: 'product_name', orderable: false, defaultContent: '' },
                { data: 'name', name: 'name', searchable: false },
                { data: 'body', name: 'body' },
                { data: 'driver_url', name: 'driver_url' },
                { data: 'status', name: 'is_active' },
            ],
        });
    </script>
@endpush
