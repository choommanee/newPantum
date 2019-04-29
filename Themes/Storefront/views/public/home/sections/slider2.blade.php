<div class="section-header boxtittle" style=" " >

    {{--<h3><a href="{{route('products.index')}}" >{{ $slider2->name }}</a></h3>--}}
    <img src="{{url('/themes/storefront/public/images/hotproduct_tittle.png')}}" >
</div>

<div class="home-slider"
    data-autoplay="{{ $slider2->autoplay }}"
    data-autoplay-speed="{{ $slider2->autoplay_speed }}"
    data-arrows="{{ $slider2->arrows }}"
>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
                $i=1;
            ?>
            @foreach ($slider2->slides as $slide)
            <div class="carousel-item <?if($i==1){?> active<?}?>">
                <img class="d-block w-100" src="{{ $slide->file->path }}" alt="First slide" style="width: 100%;">
            </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{--
@foreach ($slider2->slides as $slide)
        <div class="slide">
            <div class="slider-image" >

                <img class="d-block w-100" src="{{ $slide->file->path }}" alt="First slide" style="width: 100%">
            </div>


            {{--
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="slider-content clearfix">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    @unless (is_null($slide->caption_1))
                                        <div class="caption caption-md"
                                            data-delay="{{ $slide->options['caption_1']['delay'] }}ms"
                                            data-effect="{{ $slide->options['caption_1']['effect'] }}"
                                        >
                                            {{ $slide->caption_1 }}
                                        </div>
                                    @endunless

                                    @unless (is_null($slide->caption_2))
                                        <div class="caption caption-lg"
                                            data-delay="{{ $slide->options['caption_2']['delay'] }}ms"
                                            data-effect="{{ $slide->options['caption_2']['effect'] }}"
                                        >
                                            {{ $slide->caption_2 }}
                                        </div>
                                    @endunless

                                    @unless (is_null($slide->caption_3))
                                        <div class="caption caption-sm"
                                            data-delay="{{ $slide->options['caption_3']['delay'] }}ms"
                                            data-effect="{{ $slide->options['caption_3']['effect'] }}"
                                        >
                                            {{ $slide->caption_3 }}
                                        </div>
                                    @endunless

                                    @unless (is_null($slide->call_to_action_text))
                                        <a href="{{ $slide->call_to_action_url }}"
                                            class="btn-slider btn btn-primary animate"
                                            target="{{ $slide->options['call_to_action']['target'] ?? '_self' }}"
                                            data-delay="{{ $slide->options['call_to_action']['delay'] }}ms"
                                            data-effect="{{ $slide->options['call_to_action']['effect'] }}"
                                        >
                                            {{ $slide->call_to_action_text }}
                                        </a>
                                    @endunless
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
--}}
</div>
