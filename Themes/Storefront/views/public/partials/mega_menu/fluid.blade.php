<ul class="dropdown-menu" @if($menu->menu_id() ==7) style="width: 822px;min-height: 253px;left: 209px;background-color: #000;" id="menu_specail"
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
                                    <li style="margin-left: 10px;" onmouseover="showMenudetail('{{$item->slug()}}',{{$menu->menu_id()}});" onmouseout="hidemenudetail({{$menu->menu_id()}});">
                                        <a href="{{ $item->url() }}" title="{{ $subMenu->target() }}">
                                            {{ $item->name() }}
                                        </a>
                                    </li>
                                        @foreach ($item->items() as $Subitem)

                                            <li style="margin-left: 20px;width: 100%;height: 30px;" onmouseover="showMenudetail('{{$Subitem->slug()}}',{{$menu->menu_id()}});" onmouseout="hidemenudetail({{$menu->menu_id()}});">
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

                    <div class="col-sm-12" id="specailmenu" style="width: 838px;">
                        <div class="col-sm-6">
                            <div>

                                <h3 style="color: #FFFFFF;">P5500DN</h3>
                                    <a href="https://save2home.com/public/en/products/p5500dn-ILQaXY0k" class="product-card" style="border: #ffffff 1px solid;">
                                     <img src="https://save2home.com/storage/media/boojYDwqpsfMDQK9Uc5c4xDUX7KkiHcGDj6JySA8.png" style="width: 100%;">
                                    </a>
                                 </div>
                        </div>
                        <div class="col-sm-6">
                            <div >
                                <h3 style="color: #FFFFFF;">P3500DN</h3>
                                <a href="https://save2home.com/public/en/products/p3500dn-EHg3vQEj" class="product-card" style="border: #ffffff 1px solid;">
                                    <img src="https://save2home.com/storage/media/3DDV251UH8WzVsfVF86ABIbt6f2GB9eH0b6Zc8Qi.png" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                </div>

        </div>
    </li>
</ul>


