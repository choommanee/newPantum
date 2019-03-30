<div id="description" class="description tab-pane fade in {{ request()->has('reviews') || review_form_has_error($errors) ? '' : 'active' }}">
    {!! $product->description !!}

    @if ($product->hasAnyDriver())
        <div class="clearfix"></div>
        <div class="table-responsive" style="margin-bottom: 20px;">


            <h1 style="text-align: center;">Driver Download</h1>

            <?PHP
            $i=1;
            ?>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <ul class="list-group">

                    @foreach ($product->drivers as $driver)

                        <li class="list-group-item" style="margin-top: 10px;border: none;border-bottom: 1px solid rgba(0,0,0,.125);">
                         <span style="color: rgb(18,19,20);font-size: 22px;">
                             {{$driver->translation1->name}}
                             </span>
                            <span class="downloadspan" style="text-align: right;float: right;background-color: #a50202;">
                            <a href="https://save2home.com/public/storage/media/Driver/{{$driver->driver_url}}"  >Download</a>
                        </span>
                        </li>
                        <?PHP
                        $i++;
                        ?>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3"></div>

        </div>
    @endif
</div>
