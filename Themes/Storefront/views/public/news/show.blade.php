@extends('public.layout')

@section('title', 'News')

@push('meta')
    <meta name="title" content="news from pantum">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
@endpush

@section('content')
    <div class="container">
        <section class="compare" style="background: #fffcfc;margin-top: 30px;min-height: 600px;margin-bottom: 30px;">
            <div>
                <div class="blogNewsTitle"><h1>{{trans('news::news.news')}}</h1></div>
                <?PHP
                    $i=1;
                ?>
                <div class="row">
                @foreach($pages as $new)
                    @if($i<4)
                        <div class="col-md-4">
                            <div class="card card-new" style="" >
                                <img class="card-img-top" src="{{ $new->news_image->path }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $new->name }}</h5>
                                    <a href="{{ route('news.show', $new->slug) }}" class="btn btn-primary card-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        @else

                        @if($i==4)
            </div>
                            <div class="hot-news">
                        <ul class="news-post news-feature-mb">
                        @endif
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-2">
                                        <a href="{{ route('news.show', $new->slug) }}"><img src="{{ $new->news_image->path }}" alt="News image"></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-10 content">
                                        <h4><a href="#">{{ $new->name }}</a></h4>

                                        <p>{!! str_limit($new->getPageDescAttribute(), $limit = 150, $end = '...') !!}<a href="{{ route('news.show', $new->slug) }}" class=""><b>..Read More..</b></a>
                                            </p>

                                    </div>
                                </div>
                            </li>

                    @endif

                    <?PHP
                    $i++;
                    ?>
                @endforeach
                        </ul>
                            </div>

    </div>
        </section>
    </div>

@endsection
