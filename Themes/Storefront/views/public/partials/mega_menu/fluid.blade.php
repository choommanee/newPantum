<ul class="dropdown-menu" @if($menu->menu_id() ==7) style="width: 640px;min-height:232px;left: 209px;background-color: #000;" id="menu_specail"
                        @elseif($menu->menu_id() ==3)
                        style="left: 100px; background-color: #000000; top: 50px;"   id="menu_normal"
    @else
                        style="background-color: #000000; top: 50px;"
                        id="menu_normal" @endif>
    <li>
        <div class="fluid-menu-content">
            <div class="row">
         @if($menu->menu_id() !=7)
            @foreach ($menu->subMenus()->chunk(3) as $chunk)


                    <div class="col-sm-12" id="menuMain{{$menu->menu_id()}}">
                    @foreach ($chunk as $subMenu)
                        <div class="col-sm-12 menu_{{ $subMenu->slug() }}">
                            <a href="{{ $subMenu->url() }}" class="title" target="{{ $subMenu->target() }}">
                                {{ $subMenu->name() }}
                            </a>

                            <ul class="list-inline">
                                @foreach ($subMenu->items() as $item)
                                    <?php
                                   // print_r($item);
                                    ?>
                                    <li style="margin-left: 10px;" onmouseover="showMenudetail('{{$item->slug()}}',{{$menu->menu_id()}});">
                                        <a href="{{ $item->url() }}" title="{{ $subMenu->target() }}">
                                            {{ $item->name() }}
                                        </a>
                                    </li>
                                        @foreach ($item->items() as $Subitem)

                                            <li style="margin-left: 20px;width: 100%;height: 30px;" onmouseover="showMenudetail('{{$Subitem->slug()}}',{{$menu->menu_id()}});">
                                                <a href="{{ $Subitem->url() }}" title="{{ $Subitem->target() }}">
{{--{{ $Subitem->joename() }}{{$Subitem->getProduct()}}--}} {{ $Subitem->name() }}
                                                </a>
                                            </li>

                                        @endforeach
                                @endforeach
                            </ul>
                        </div>
                            @push('scripts')
                            <script>
                                //  alert('test');
                                var mainmenu = '{{ $subMenu->slug() }}';
                              //  if(mainmenu=='printers'){
                              //      alert('test');
                              //      $('.menu_1').width(400);
                              //  }
                            </script>
                            @endpush
                    @endforeach
                </div>

            @endforeach

                @if($menu->menu_id() ==3)
                    <div class="col-sm-6 menushowdetail">

                    </div>
                    @endif
                @else

                    <div class="col-sm-12" id="specailmenu" style="width: 650px;">
                        <div class="col-sm-6">
                            <div >
                                    <a href="#" class="product-card">

                                     <img src="https://save2homw.com/storage/media/p1.png" style="width: 100%;">

                                    </a>
                                 </div>
                        </div>
                        <div class="col-sm-6">
                            <div >
                                <a href="#" class="product-card">

                                    <img src="https://save2homw.com/storage/media/p2.png" style="width: 100%;">

                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                </div>

        </div>
    </li>
</ul>


