@extends('public.layout')

@section('title', $page->name)

@push('meta')
    <meta name="title" content="{{ $page->meta->meta_title }}">
    <meta name="keywords" content="{{ implode(',', $page->meta->meta_keywords) }}">
    <meta name="description" content="{{ $page->meta->meta_description }}">
    <meta property="og:title" content="{{ $page->meta->meta_title }}">
    <meta property="og:description" content="{{ $page->meta->meta_description }}">
@endpush

@section('content')
    <div class="container">
        <section class="compare" style="background: #fffcfc;margin-top: 30px;min-height: 600px;margin-bottom: 30px;">
            <div class="table-responsive">
                <div class="blogNewsTitle"><h1>{{ $page->name }}</h1></div>
                <div class="blogNewsDetail">{!! $page->body !!}</div>

    <div class="col-md-8 blogNews" >
        <div class="product-image">
            <div class="base-image">
                @if (! $page->news_image->exists)
                    <div class="image-placeholder">
                        <i class="fa fa-picture-o"></i>
                    </div>
                @else
                    <a class="base-image-inner" href="{{ $page->news_image->path }}">
                        <img src="{{ $page->news_image->path }}">
                        <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                    </a>
                @endif

                @foreach ($page->additional_images_news as $additionalImage)
                    @if (! $additionalImage->exists)
                        <div class="image-placeholder">
                            <i class="fa fa-picture-o"></i>
                        </div>
                    @else
                        <a class="base-image-inner" href="{{ $additionalImage->path }}">
                            <img src="{{ $additionalImage->path }}">
                            <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                        </a>
                    @endif
                @endforeach
            </div>

            <div class="additional-image">
                @if (! $page->news_image->exists)
                    <div class="image-placeholder">
                        <i class="fa fa-picture-o"></i>
                    </div>
                @else
                    <div class="thumb-image">
                        <img src="{{ $page->news_image->path }}">
                    </div>
                @endif

                @foreach ($page->additional_images_news as $additionalImage)
                    @if (! $additionalImage->exists)
                        <div class="image-placeholder">
                            <i class="fa fa-picture-o"></i>
                        </div>
                    @else
                        <div class="thumb-image">
                            <img src="{{ $additionalImage->path }}">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>
        </section>
    </div>

@endsection
