@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('serials::serials.customer_register'))

    <li class="active">{{ trans('serials::serials.customer_register') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'serials')
    @slot('name', trans('serials::serials.serial'))

    @component('admin::components.table')
        @slot('thead')
            <tr>
                @include('admin::partials.table.select_all')
                <th>{{ trans('serials::serials.product_name') }}</th>
                <th>{{ trans('serials::serials.serials_number') }}</th>
                <th>{{ trans('serials::serials.date_start') }}</th>
                <th>{{ trans('serials::serials.year_warranty') }}</th>
                <th>{{ trans('serials::serials.customer_register') }}</th>
                <th>image s/n</th>
                <th>{{ trans('serials::serials.status') }}</th>
                <th>Activate</th>
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
                { data: 'user_id', name: 'user_id' },
                { data: 'img_product', name: 'img_product' ,
                    "render": function ( data, type, row ) {
                        if(row['user_id']=='empty'){
                            return '';
                        }else if(row['user_id'] !='empty'){
                            return '<img src="{{url('/storage/media/warranty/')}}/'+row['img_product']+'" style="width: 100px;">';
                        }

                    }},
                { data: 'status', name: 'is_active' },
                { data: 'cus_use', name: 'cus_use',
                    "render": function ( data, type, row, meta ) {
                            if(row['cus_use']=='0'){
                                return '<span style="color: red;">Not use</span>';
                            }else if(row['cus_use']=='1'){
                                return '<span style="color: orange;">Variable</span>';
                            }else if(row['cus_use']=='2'){
                                return '<span style="color: green;"><b>Activate</b></span>';
                            }else if(row['cus_use']=='3'){
                                return '<span style="color: gray;">Not Activate</span>';
                            }

                    } },
            ],
        });
    </script>

@endpush
