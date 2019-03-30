@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('serials::serials.serials'))

    <li class="active">{{ trans('serials::serials.serials') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'serials')
    @slot('name', trans('serials::serials.serial'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')
                <th>ชื่อสินค้า</th>
                <th>SN</th>
                <th>วันที่เริ่มต้น</th>
                <th>จำนวนปีรับประกัน</th>
                <th>สถานะ</th>
            </tr>
        @endslot
    @endcomponent
@endcomponent

@push('scripts')
    <script>
        new DataTable('#serials-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                //
                { data: 'product_name', name: 'product_name', orderable: false, defaultContent: '' },
                { data: 'name', name: 'name', searchable: false },
                { data: 'datevarunty_start', name: 'datevarunty_start' },
                { data: 'varunty_time', name: 'varunty_time' },
                { data: 'status', name: 'is_active' },
            ],
        });
    </script>
@endpush
