@extends('public.layout')

@section('breadcrumb')
    @if (request()->routeIs('account.dashboard.index'))
        <li class="active">{{ trans('storefront::account.links.my_account') }}</li>
    @else
        <li><a href="{{ route('account.dashboard.index') }}">{{ trans('storefront::account.links.my_account') }}</a></li>
    @endif

    @yield('account_breadcrumb')
@endsection

@section('content')
    <div class="container-fluid" style="
    margin-top: 0px;
    background: #FFFFFF;
    padding: 25px;
">
        <div class="my-account clearfix">
            <div class="col-md-3">
                <div class="sidebar-menu">
                    <ul class="list-inline">
                        <li style="text-align: center;">
                            <a href="{{ route('account.dashboard.index') }}" style="height: 100px;" >
                                <img src="https://save2homw.com/storage/media/Person.png" style="width: 100px;"/>
                                <br/>
                                {{trans('storefront::account.dashboard.hello')}} : {{$my->first_name}} {{$my->last_name}}
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('account.dashboard.index') ? 'active' : '' }}">
                            <a href="{{ route('account.dashboard.index') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                {{ trans('storefront::account.links.dashboard') }}
                            </a>
                        </li>

                        <li class="{{ request()->routeIs('account.warranty.index') ? 'active' : '' }}">
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >
                                <i class="fas fa-laptop"></i>
                                {{ trans('storefront::account.warranty.warranty') }}
                            </a>
                            <ul class="collapse list-unstyled" id="pageSubmenu" style="    padding-left: 20px;">
                                <li>
                                    <a href="{{ route('account.warranty.index') }}">
                                    <i class="fas fa-laptop"></i>
                                    {{ trans('storefront::account.warranty.warranty_list') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('account.warranty.addwarranty') }}">
                                        <i class="fas fa-plus-square"></i>
                                    {{ trans('storefront::account.warranty.warranty_add') }}
                                    </a>
                                </li>
                            </ul>

                        </li>


                        {{--<li class="{{ request()->routeIs('account.reviews.index') ? 'active' : '' }}">
                            <a href="{{ route('account.reviews.index') }}">
                                <i class="fa fa-comment" aria-hidden="true"></i>
                                {{ trans('storefront::account.links.my_reviews') }}
                            </a>
                        </li>--}}

                        <li class="{{ request()->routeIs('account.profile.edit') ? 'active' : '' }}">
                            <a href="{{ route('account.profile.edit') }}">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                {{ trans('storefront::account.links.my_profile') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ trans('storefront::account.links.logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="clearfix"></div>

                <div class="content-right clearfix">
                    @yield('content_right')
                </div>
            </div>
        </div>
    </div>
@endsection
