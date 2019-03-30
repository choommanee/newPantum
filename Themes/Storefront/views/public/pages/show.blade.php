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

        <section class="compare" style="background: #ffffff;margin-top: 30px;min-height: 600px;margin-bottom: 30px;">
            <div class="table-responsive">
                <div class="blogNewsTitle" style="background-color: #ffffff"><h1>{{ $page->name }}</h1></div>
                <div class="blogNewsDetail"  style="background-color: #ffffff">{!! $page->body !!}</div>

                
            </div>
        </section>


@endsection
