@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('news::news.news'))

    <li class="active">{{ trans('news::news.news') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('resource', 'news')
    @slot('buttons', ['create'])
    @slot('name', trans('news::news.news'))

    @slot('thead')
        <tr>
            @include('admin::partials.table.select_all')

            <th>{{ trans('news::news.table.name') }}</th>
            <th>{{ trans('admin::admin.table.status') }}</th>
            <th data-sort>{{ trans('admin::admin.table.created') }}</th>
        </tr>
    @endslot
@endcomponent

@push('scripts')
    <script>
        new DataTable('#news-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'name', name: 'translations.name', orderable: false, defaultContent: '' },
                { data: 'status', name: 'is_active', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
@endpush
