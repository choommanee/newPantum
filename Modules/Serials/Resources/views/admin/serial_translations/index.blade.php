@extends('admin::master')

@component('admin::components.page.header')
    @slot('title', trans('serials::serial_translations.serial_translations'))

    <li class="active">{{ trans('serials::serial_translations.serial_translations') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'serial_translations')
    @slot('name', trans('serials::serial_translations.serial_translations'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')
            </tr>
        @endslot
    @endcomponent
@endcomponent

@push('scripts')
    <script>
        new DataTable('#serial_translations-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                //
            ],
        });
    </script>
@endpush
