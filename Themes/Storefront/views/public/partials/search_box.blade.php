<div class="icon-chagelang">
    <a href="{{url('en')}}" style="cursor: pointer"><i></i>EN</a>
</div>
<div class="icon-chagelang">
    <a href="{{url('th')}}" style="cursor: pointer"><i></i>TH</a> /
</div>
<div class="search-area pull-left">
    <form action="{{ route('products.index') }}" method="GET" id="search-box-form">
        <div class="search-box {{--hidden-sm hidden-xs visible-sm visible-xs--}} " style="display: none;">
            <input type="text" name="query" class="search-box-input" placeholder="{{ trans('storefront::layout.search_for_products') }}" value="{{ request('query') }}">

            <div class="search-box-button">
                <button class="search-box-btn btn btn-primary" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
{{-- {{ trans('storefront::layout.search') }} --}}
</button>
{{--
<select name="category" class="select search-box-select custom-select-black">
<option value="" selected>{{ trans('storefront::layout.all_categories') }}</option>

@foreach ($categories as $category)
    <option value="{{ $category->slug }}" {{ request('category') === $category->slug ? 'selected' : '' }}>
        {{ $category->name }}
    </option>
@endforeach
</select>
--}}
</div>
</div>

<div class="mobile-search ">

<div class="dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-search" aria-hidden="true"></i>
</div>

<div class="dropdown-menu">
<div class="search-box">
    <input type="search" name="query" class="search-box-input" placeholder="{{ trans('storefront::layout.search_for_products') }}">

    <div class="search-box-button">
        <button type="submit" class="search-box-btn btn btn-primary">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</div>
</div>
</div>
</div>
        <div class="top-login"><a href="{{url('account')}}">{{trans('user::auth.login')}} / {{trans('user::auth.register')}}</a></div>
</form>
</div>
