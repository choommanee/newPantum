@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('faq::faqs.faqs'))

    <li class="active">{{ trans('faq::faqs.faqs') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'faqs')
    @slot('name', trans('faq::faqs.faq'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')
                <th>Product Name</th>
                <th>Faq/Manual name</th>
                <th>Faq/Manual Detail</th>
                <th>Other Url</th>
                <th>Status</th>
            </tr>
        @endslot
    @endcomponent
@endcomponent

@push('scripts')
    <script>
        new DataTable('#faqs-table .table', {
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
