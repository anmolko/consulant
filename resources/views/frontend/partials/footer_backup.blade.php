
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer style1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                    <div class="footer-logo mb-10">
                        <a href="/"><img src="{{ (@$setting_data->logo_white) ? asset('/images/settings/'.@$setting_data->logo_white): asset('/images/settings/'.@$setting_data->logo) }}" alt=""></a>
                    </div>
                    <div class="textwidget white-color pb-10 text-justify">
                         {!! ucfirst(@$setting_data->website_description ?? '') !!}
                    </div>
                    <ul class="footer-social md-mb-30">
                        @if(@$setting_data->facebook)
                            <li><a href="{{@$setting_data->facebook}}" target="_blank"><span class="fa-brands fa-facebook"></span></a></li>
                        @endif
                        @if(@$setting_data->youtube)
                            <li><a href="{{@$setting_data->youtube}}" target="_blank"><span class="fa-brands fa-youtube"></span></a></li>

                        @endif
                        @if(@$setting_data->instagram)
                            <li><a href="{{@$setting_data->instagram}}" target="_blank"><span class="fa-brands fa-instagram"></span></a></li>

                        @endif
                        @if(@$setting_data->linkedin)
                            <li><a href="{{@$setting_data->linkedin}}" target="_blank"><span class="fa-brands fa-linkedin"></span></a></li>
                        @endif
                        @if(!empty(@$setting_data->ticktock))
                            <li><a href="{{@$setting_data->ticktock}}" target="_blank"><span class="fa-brands fa-tiktok"></span></a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                    @if($footer_nav_data1!==null)
                    <h3 class="footer-title">{{ $footer_nav_title1 ?? '' }}</h3>
                    <ul class="site-map">
                        @foreach(@$footer_nav_data1 as $nav)
                            @if(empty(@$nav->children[0]))
                                <li>
                                    <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                        {{ @$nav->name ?? @$nav->title ?? ''}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{@$setting_data->address ?? ''}}</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" target="_blank">
                                    {{@$setting_data->phone ?? $setting_data->mobile ?? ''}}
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{@$setting_data->email ?? ''}}" target="_blank"> {{@$setting_data->email ?? ''}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 recent-posts">
                    @if(count($footer_jobs)>0)
                        <h3 class="footer-title">Newsletter</h3>
                        @foreach(@$footer_jobs as $index=>$job)
                            <div class="recent-post-widget {{$loop->first ? 'no-border':''}}">
                                <div class="post-img" style="width: 80px;">
                                    <a href="{{route('job.single',@$job->slug)}}">
                                        <img class="lazy" data-src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/career.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-desc">
                                    <a href="{{route('job.single',@$job->slug)}}" class="text-white">
                                        {{ucfirst($job->name)}} </a>
                                    <span class="date-post"> <i class="fa fa-calendar"></i>
                                        @if(@$job->end_date >= $today)
                                            {{date('M j, Y',strtotime(@$job->end_date))}}
                                        @else
                                            Expired
                                        @endif </span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>© 2023 {{$setting_data->website_name ?? 'Careerlink'}} - by <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

@if(!empty(@$setting_data->whatsapp))
    <a href="https://wa.me/{{$setting_data->whatsapp}}" class="float" target="_blank">
        <i class="fa-brands fa-whatsapp my-float"></i>
    </a>
@endif

<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form method="get" id="searchform" action="{{route('searchJob')}}">
                    <div class="form-group">
                        <input id="s" name="s" class="form-control" placeholder="Search for jobs.." type="text" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                        <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->


<!-- modernizr js -->
<script src="{{ asset('assets/frontend/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery latest version -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<!-- op nav js -->
<script src="{{ asset('assets/frontend/js/jquery.nav.js') }}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('assets/frontend/js/skill.bars.jquery.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- waypoints.min js -->
<script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
<!-- counterup.min js -->
<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('assets/frontend/inc/custom-sl') }}ider/js/jquery.nivo.slider.js"></script>
<!-- main js -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

<script src="{{ asset('assets/common/lazyload.js') }}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
