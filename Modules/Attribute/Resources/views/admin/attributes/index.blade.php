@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('attribute::admin.attributes'))

    <li class="active">{{ trans('attribute::admin.attributes') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'attributes')
    @slot('name', trans('attribute::admin.attribute'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')

                <th>{{ trans('attribute::admin.table.name') }}</th>
                <th>{{ trans('attribute::admin.table.attribute_set') }}</th>
                <th>{{ trans('attribute::admin.table.filterable') }}</th>
                <th>Is Properties</th>
                <th data-sort>{{ trans('admin::admin.table.created') }}</th>
            </tr>
        @endslot
    @endcomponent
@endcomponent

@push('scripts')
    <script>
        new DataTable('#attributes-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'name', name: 'translations.name', orderable: false, defaultContent: '' },
                { data: 'attribute_set', name: 'attributeSet.name', searchable: false, orderable: false, defaultContent: '' },
                { data: 'is_filterable', name: 'is_filterable' },
                { data: 'is_properties', name: 'is_properties' },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
@endpush
