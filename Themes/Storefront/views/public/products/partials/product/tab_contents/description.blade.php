<div id="description" class="description tab-pane fade in {{ request()->has('reviews') || review_form_has_error($errors) ? '' : 'active' }}">
    {!! $product->description !!}

    @if ($product->hasAnyDriver())
        <div class="clearfix"></div>


            <?PHP
            $i=1;
            $tempRiver =0;
            ?>


                    @foreach ($product->drivers as $driver)
                        <?PHP

                                if($driver->is_driver =='1' and $i==1){
                                    ?>
                            <div class="table-responsive" style="margin-bottom: 20px;">
                            <h1 style="text-align: center;">Driver Download</h1>


                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <ul class="list-group">

                                <?PHP

                                }elseif($driver->is_driver =='2' and $i > 1 and $driver->is_driver <> $tempRiver  ){
                                    ?>
                                    </ul>
                            </div>
                            </div>
                            <div class="table-responsive" style="margin-bottom: 20px;">
                                    <h1 style="text-align: center;margin-top: 25px;">Brochure Download</h1>


                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <ul class="list-group">

                                        <?php

                                          //  $tempRiver =0;
                                }elseif($driver->is_driver =='3' and $i > 1 and $driver->is_driver <> $tempRiver  ){
                                            ?>
                                        </ul>
                                    </div>
                            </div>
                            <div class="table-responsive" style="margin-bottom: 20px;">
                                <h1 style="text-align: center;margin-top: 25px;">Manual & Faq</h1>


                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <ul class="list-group">

                                        <?php

                                        //$tempRiver =0;
                                        }
                            ?>

                        <li class="list-group-item" style="margin-top: 10px;border: none;border-bottom: 1px solid rgba(0,0,0,.125);">
                         <span style="color: rgb(18,19,20);">
                             {{$driver->translation1->name}}
                             </span>
                            <span class="downloadspan" >
                            <a href="https://save2home.com/public/storage/media/Driver/{{$driver->driver_url}}"  >Download</a>
                        </span>
                        </li>
                        <?PHP
                        $tempRiver = $driver->is_driver;
                        $i++;
                        ?>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3"></div>

        </div>
    @endif
</div>
