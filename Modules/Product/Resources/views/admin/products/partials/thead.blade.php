<tr>
    @include('admin::partials.table.select_all')

    <th>{{ trans('product::products.table.thumbnail') }}</th>
    <th>{{ trans('product::products.table.name') }}</th>
    <th>{{ trans('admin::admin.table.status') }}</th>
    <th data-sort>{{ trans('admin::admin.table.created') }}</th>
</tr>
