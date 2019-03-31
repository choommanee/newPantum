<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<footer class="footer">
    <div class="container-fluid">
        <div class="footer-top p-tb-50 clearfix">
            <div class="row">
                <div class="col-md-3">
                    {{--<a href="{{ route('home') }}" class="footer-logo">
                        @if (is_null($footerLogo))
                            <h2>{{ setting('store_name') }}</h2>
                        @else
                            <img src="{{ $footerLogo }}" class="img-responsive" alt="footer-logo">
                        @endif
                    </a>--}}

                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
    font-size: 18px;
    font-weight: 800;
    color: #FFFFFF;">{{-- setting('store_tagline') --}}SERVICE CENTER</p>

                    @if (setting('store_phone') || setting('store_email') || setting('storefront_footer_address'))
                        <div class="contact">
                            <ul class="list-inline">
                                @if (setting('store_phone'))
                                    <li>
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                        {{ setting('store_phone') }}</li>
                                @endif
                                @if($socialLinks['facebook-official']!='')
                                    <li><i class="fab fa-facebook" aria-hidden="true" ></i>
                                        <a href="{{ $socialLinks['facebook-official'] }}">PantumThailand</a></li>
                                @endif

                                <li><i class="fab fa-line" aria-hidden="true" ></i>
                                    <a href="https://line.me/R/ti/p/%40pantumthailand">Line : @pantumthailand</a></li>
                                @if (setting('store_email'))
                                    <li><i class="fas fa-envelope-square"  aria-hidden="true"></i> {{ setting('store_email') }}</li>
                                @endif

                               {{--@if (setting('storefront_footer_address'))
                                    <li><i class="fab fa-location-arrow" aria-hidden="true"></i>{{ setting('storefront_footer_address') }}</li>
                                @endif--}}
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="col-md-3">
                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
                            font-size: 18px;
                            font-weight: 800;
                            color: #FFFFFF;">{{-- setting('store_tagline') --}}MAP</p>


                    <div class="contact">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.6309264969336!2d100.48655581534734!3d13.801108599866028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bcbbf35c491%3A0xa87da2733453001f!2zUGFudHVtIChUaGFpbGFuZCkgQ28uLEx0ZCDguJrguKPguLTguKnguLHguJcg4LmB4Lie4LiZ4LiX4Lix4LmI4LihKOC4m-C4o-C4sOC5gOC4l-C4qOC5hOC4l-C4oikg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sen!2sth!4v1548215094942" width="100%" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="clearfix"></div>
                    <p class="footer-brief" style="border-bottom: 1px solid;
                            font-size: 18px;
                            font-weight: 800;
                            color: #FFFFFF;">{{-- setting('store_tagline') --}}ADDRESS</p>
                    <div class="contact">
                        <ul class="list-inline">
                            <li style="font-size: 20px;margin-left: 1px;"><i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                                PANTUM (THAILAND) CO.,LTD<br>

                            </li>
                        </ul>
                        <div class="footaddress" style="padding-left:0px;">104/3 M.9 Bangkruai - Sainoi Rd, Tambon Bangkruai Amphur Bangkruai Nonthaburi 11130</div>
                    </div>

                </div>
                <div class="col-md-3">


                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
                            font-size: 18px;
                            font-weight: 800;
                            color: #FFFFFF;">{{-- setting('store_tagline') --}}CONTACT</p>


                    <div class="contact">
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>02-101-3144

                            </li>
                            <li >
                                <i class="fas fa-fax"  aria-hidden="true" style="font-size: 13px;"></i>02-101-3143
                            </li>
                            <li >
                                <i class="fas fa-envelope-square"  aria-hidden="true"></i>info@pantum.co.th
                            </li>
                            <li >
                                <i class="fas fa-globe" aria-hidden="true"></i>www.pantum.co.th
                            </li>
                        </ul>
                    </div>

                </div>

                {{-- <div class="col-md-8">
                     <div class="col-md-6">
                         <div class="row">
                             <div class="links">
                                 <div class="mobile-collapse">
                                     <h4>{{ trans('storefront::account.links.my_account') }}</h4>
                                 </div>

                                 <ul class="list-inline">
                                     <li><a href="{{ route('account.dashboard.index') }}">{{ trans('storefront::account.links.dashboard') }}</a></li>
                                     <li><a href="{{ route('account.orders.index') }}">{{ trans('storefront::account.links.my_orders') }}</a></li>
                                     <li><a href="{{ route('account.reviews.index') }}">{{ trans('storefront::account.links.my_reviews') }}</a></li>
                                     <li><a href="{{ route('account.profile.edit') }}">{{ trans('storefront::account.links.my_profile') }}</a></li>

                                     @auth
                                         <li><a href="{{ route('logout') }}">{{ trans('storefront::account.links.logout') }}</a></li>
                                     @endauth
                                 </ul>
                             </div>
                         </div>
                     </div>

                     @if ($footerMenu->isNotEmpty())
                         <div class="col-md-6">
                             <div class="row">
                                 <div class="links">
                                     <div class="mobile-collapse">
                                         <h4>{{ setting('storefront_footer_menu_title') }}</h4>
                                     </div>

                                     <ul class="list-inline">
                                         @foreach ($footerMenu as $menuItem)
                                             <li><a href="{{ $menuItem->url() }}">{{ $menuItem->name }}</a></li>
                                         @endforeach
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     @endif
                 </div>--}}
            </div>
        </div>

        {{--
        @if ($socialLinks->isNotEmpty())
             <div class="footer-middle p-tb-30 clearfix">
                 <ul class="social-links list-inline">

                     @foreach ($socialLinks as $icon => $link)
                         @if (! is_null($link))
                             <li><a href="{{ $link }}"><i class="fa fa-{{ $icon }}" aria-hidden="true"></i></a></li>
                         @endif
                     @endforeach
                 </ul>
             </div>
         @endif
         --}}
    </div>

    <div class="footer-bottom bg-black-dark p-tb-20 clearfix">
        <div class="container">
            <div class="copyright text-center">
                {!! $copyrightText !!}
            </div>
        </div>
    </div>
</footer>
