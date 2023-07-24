@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')

    @if(count($sliders) > 0)
        <div id="rs-slider" class="rs-slider slider3 rs-slider-style4 relative">
            <div class="bend niceties">
                <div id="nivoSlider" class="slides">
                    @foreach(@$sliders as $index=>$slider)
                        <img src="{{ asset('/images/sliders/'.$slider->image) }}" alt="" title="#slide-{{$index+1}}" />
                    @endforeach
                </div>
                @foreach(@$sliders as $index=>$slider)
                    <div id="slide-{{$index+1}}" class="slider-direction">
                        <div class="content-part text-center">
                            <div class="container">
                                <div class="slider-des">
                                    <div class="sl-subtitle">{{@$slider->subheading ?? ''}}</div>
                                    <h1 class="sl-title">{{@$slider->heading ?? ''}}</h1>
                                </div>
                                @if(@$slider->link)
                                    <ul class="slider-bottom">
                                        <li><a class="readon consultant orange-slide" href="{{@$slider->link ?? ''}}">{{@$slider->button ?? 'Start Exploring'}}</a></li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if($homepage_info->mission)
        <div id="rs-services" class="rs-services style4 pt-95 pb-100 md-pt-65 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="{{ asset('assets/frontend/images/services/mission.png') }}" alt="">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a> Our Mission</a></h3>
                                <p class="margin-0">
                                    {{ ucfirst(@$homepage_info->mission) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="{{asset('assets/frontend/images/services/vision.png')}}" alt="">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a>Our Vision</a></h3>
                                <p class="margin-0"> {{ ucfirst(@$homepage_info->vision) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="{{ asset('assets/frontend/images/services/benefits.png') }}" alt="">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a>Our Value</a></h3>
                                <p class="margin-0">{{ ucfirst(@$homepage_info->value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->welcome_description))
        <div class="rs-about style1 pt-10 pb-40 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                        <div class="sec-title2 mb-30">
                            <div class="sub-text">{{$homepage_info->welcome_subheading ?? ''}}</div>
                            <h2 class="title mb-23">
                                <?php
                                $split = explode(" ", @$homepage_info->welcome_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->welcome_heading)."\n"}}
                                <span> {{$split[count($split)-1]}} </span>
                            </h2>
                            <p class="desc mb-0 text-justify"> {{ ucfirst(@$homepage_info->welcome_description) }}</p>
                        </div>
                        @if(@$homepage_info->welcome_link)
                            <div class="btn-part">
                                <a class="readon consultant discover" href="{{@$homepage_info->welcome_link}}">
                                    {{ @$homepage_info->welcome_button }}
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="rs-videos choose-video">
                            <div class="images-video custom-image">
                                <img class="lazy" data-src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="images">
                            </div>
                            @if(@$homepage_info->welcome_video_link)
                                <div class="animate-border">
                                    <a class="popup-border" href="{{ @$homepage_info->welcome_video_link }}">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($latestServices) > 0)
        <div id="rs-services" class="rs-services style2 bg19 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title2 text-center md-left mb-40">
                    <div class="sub-text">What We Offer</div>
                    <h2 class="title mb-0 md-pb-20">The best <span> services </span> for your business
                    </h2>
                </div>
                <div class="row">
                    @foreach(@$latestServices as $index=>$service)
                        <div class="col-md-4 mt-2 mr-14 service-wrap" style="width: 365.5px!important;">
                            <div class="image-part">
                                <img class="lazy" data-src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title">
                                    <a href="{{route('service.single',$service->slug)}}">
                                        {{ucwords(@$service->title)}}
                                    </a>
                                </h3>
                                <div class="desc"> {{ elipsis( strip_tags($service->description) )}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->action_heading))
        <div class="rs-cta style1 bg13 pt-100 pb-95 md-pt-70 md-pb-65">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-8 md-mb-30">
                        <div class="sec-title2">
                            <h2 class="title white-color margin-0">
                                <?php
                                $split = explode(" ", @$homepage_info->action_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->action_heading)."\n"}}
                                <span> {{$split[count($split)-1]}} </span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="btn-part text-right md-left">
                            <a class="readon consultant discover" href="{{@$homepage_info->action_link2}}">{{@$homepage_info->action_link ?? 'Learn more'}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->core_main_heading))
        <div class="rs-services style5 bg14 pt-95 pb-100 md-pt-65 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-50">
                    <span class="sub-text small">{{ucfirst(@$homepage_info->core_main_description)}}</span>
                    <h2 class="title title3">
                        {{ucfirst(@$homepage_info->core_main_heading)}}
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img class="lazy" data-src="{{asset('assets/frontend/images/services/trust.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{ ucfirst(@$homepage_info->core_description1 ?? '') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title">
                                                <a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a>
                                            </h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">
                                                {{ucfirst(@$homepage_info->core_description1 ?? '')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img class="lazy" data-src="{{asset('assets/frontend/images/services/ethics.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a>{{ucwords(@$homepage_info->core_heading2)}}</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{ucfirst(@$homepage_info->core_description2)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a>{{ucwords(@$homepage_info->core_heading2)}}</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">
                                                {{ucfirst(@$homepage_info->core_description2)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img class="lazy" data-src="{{asset('assets/frontend/images/services/quality.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a>{{ucwords(@$homepage_info->core_heading3)}}</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{ucfirst(@$homepage_info->core_description3)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a>{{ucwords(@$homepage_info->core_heading3)}}</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc"> {{ucfirst(@$homepage_info->core_description3)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img class="lazy" data-src="{{asset('assets/frontend/images/services/integrity.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a>{{ucwords(@$homepage_info->core_heading4)}}</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{ucfirst(@$homepage_info->core_description4)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a>{{ucwords(@$homepage_info->core_heading4)}}</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">
                                                {{ucfirst(@$homepage_info->core_description4)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="{{asset('assets/frontend/images/services/professional.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{  elipsis(ucfirst(@$homepage_info->core_description5)) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">
                                                {{ucfirst(@$homepage_info->core_description5)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img class="lazy" data-src="{{asset('assets/frontend/images/services/target.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{  elipsis(ucfirst(@$homepage_info->core_description6)) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">
                                                {{ucfirst(@$homepage_info->core_description6)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(@$recruitments[0]->heading)
        <div class="rs-process style1 bg2 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title2 text-center md-left mb-40">
                    <div class="sub-text">Working Process</div>
                    <h2 class="title white-color">How we work for our valued <br><span>customers.</span></h2>
                </div>
            </div>
            <div class="container custom2">
                <div class="process-effects-layer">
                    <div class="row">
                        @foreach(@$recruitments as $index=>$recruitment)
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="{{asset('assets/frontend/images/services/'.recruitment_process_icons($index))}}" alt="">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> {{ $index+1 }} </span></div>
                                            <div class="number-title">
                                                <h3 class="title"> {{@$recruitment->title}}</h3>
                                            </div>
                                            <div class="number-txt">
                                                {{ $recruitment->icon_description ?? '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($latestJobs) > 1)
        <div class="rs-project style7 pt-100 pb-30 md-pt-70 md-pb-70">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="sec-title2 mb-55 md-mb-30">
                            <div class="sub-text">Recent Jobs</div>
                            <h2 class="title mb-23">We provide good availability of jobs for <span>you.</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right md-left">
                        <div class="btn-part mb-90 md-mb-50">
                            <a class="readon consultant discover" href="{{ route('job.list') }}">All Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pl-30 pr-30">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30"
                     data-autoplay="false" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                     data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="4"
                     data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2"
                     data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2"
                     data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                     data-mobile-device-nav="false" data-mobile-device-dots="true">

                    @foreach($latestJobs as $index=>$job)
                        <div class="project-item">
                            <div class="project-img">
                                <img class="lazy" data-src="{{ ($job->image !== null) ? asset('/images/job/thumb/thumb_'.@$job->image): asset('assets/frontend/images/career.png')}}"  alt="">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <h3 class="title"><a href="{{route('job.single',@$job->slug)}}">{{ucfirst($job->name)}}</a></h3>
                                    <span class="category"><a href="{{route('job.single',@$job->slug)}}">
                                             @if(@$job->end_date >= $today)
                                                {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                            @else
                                                Expired
                                            @endif
                                        </a>
                                    </span>
                                </div>
                                <a class="p-icon" href="{{route('job.single',@$job->slug)}}"><i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif

    @if(count($director) > 0)
        <div class="rs-project style7 pt-100 pb-30 md-pt-70 md-pb-70">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="sec-title2 mb-55 md-mb-30">
                            <div class="sub-text">Recent Jobs</div>
                            <h2 class="title mb-23">We provide good availability of jobs for <span>you.</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pl-30 pr-30 rs-team-Single">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                     data-autoplay="false" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                     data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="1"
                     data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="1"
                     data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="1"
                     data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                     data-mobile-device-nav="false" data-mobile-device-dots="true">

                    @foreach($director as $managing)
                        <div class="btm-info-team" style="padding: 20px 100px;">
                            <div class="row align-items-center">
                                <div class="col-lg-5 md-mb-50">
                                    <div class="images-part">
                                        <img class="lazy" data-src="{{asset('/images/director/'.@$managing->image)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="con-info">
                                        <span class="designation-info">{{ucfirst(@$managing->heading)}}</span>
                                        <h2 class="title">{{ucfirst(@$managing->designation)}}</h2>
                                        <div class="short-desc">
                                            {{@$managing->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->why_heading))
        <div class="rs-achievement style1 relative pt-40 md-pt-40">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-6 pr-0">
                        <div class="sec-title2 mb-45 md-mb-30">
                            <div class="sub-text">Leading solutions</div>
                            <h2 class="title mb-23">
                                <?php
                                $split = explode(" ", @$homepage_info->why_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->why_heading)."\n"}}
                                <span> {{$split[count($split)-1]}} </span>
                            </h2>
                            <div class="desc left-line-v">
                                <div class="draw-line start-draw"></div>
                                {{ucwords(@$homepage_info->why_description)}}
                            </div>
                        </div>
                        <div class="rs-counter hover-box pt-35">
                            <div class="rs-counter-list box-item">
                                <div class="counter-icon"><i class="glyph-icon flaticon-picture-1"></i></div>
                                <h3 class="counter-number">{{@$homepage_info->project_completed ?? '450'}}</h3>
                                <div class="counter-text">Project <br> completed</div>

                            </div><div class="rs-counter-list box-item">
                                <div class="counter-icon"><i class="glyph-icon flaticon-user-1"></i></div>
                                <h3 class="counter-number">{{@$homepage_info->happy_clients ?? '660'}}</h3>
                                <div class="counter-text">Happy <br> Clients</div>
                            </div>

                            <div class="rs-counter-list box-item active">
                                <div class="counter-icon"><i class="glyph-icon flaticon-suitcase"></i></div>
                                <h3 class="counter-number">{{@$homepage_info->visa_approved ?? '340'}}</h3>
                                <div class="counter-text">Visa <br> Approved</div>
                            </div>
                            <div class="rs-counter-list box-item">
                                <div class="counter-icon"><i class="glyph-icon flaticon-picture-1"></i></div>
                                <h3 class="counter-number">{{@$homepage_info->success_stories ?? '987'}}</h3>
                                <div class="counter-text">Success <br> Stories</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 md-pt-50">
                        <div class="img-part">
                            <img class="lazy" data-src="{{asset('/images/home/welcome/'.@$homepage_info->what_image5)}}" alt="">
                        </div>
                    </div>
                </div>
                <img class="pattern-img lazy" data-src="{{asset('assets/frontend/images/pattern/pattern4.png')}}" alt="">
            </div>
        </div>
    @endif

    @if(count($clients) > 0)
        <div class="rs-patter-section bg14 style1 pt-100 pb-100">
            <div class="container custom">
                <div class="sec-title2 mb-55 md-mb-35 text-center">
                    <div class="sub-text">Quick contact</div>
                    <h2 class="title mb-0">Let us help your business to<br> move<span>forward.</span></h2>
                </div>
                <div class="rs-carousel owl-carousel"
                     data-loop="true"
                     data-items="5"
                     data-margin="30"
                     data-autoplay="true"
                     data-hoverpause="true"
                     data-autoplay-timeout="3000"
                     data-smart-speed="600"
                     data-dots="false"
                     data-nav="false"
                     data-nav-speed="false"

                     data-md-device="5"
                     data-md-device-nav="false"
                     data-md-device-dots="false"
                     data-center-mode="false"

                     data-ipad-device2="3"
                     data-ipad-device-nav2="false"
                     data-ipad-device-dots2="false"

                     data-ipad-device="3"
                     data-ipad-device-nav="false"
                     data-ipad-device-dots="false"

                     data-mobile-device="2"
                     data-mobile-device-nav="false"
                     data-mobile-device-dots="false">
                    @foreach($clients as $client)
                        <div class="logo-img">
                            <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                <img class="hovers-logos rs-grid-img lazy" data-src="{{asset('/images/clients/'.@$client->image)}}" title="" alt="">
                                <img class="mains-logos rs-grid-img lazy" data-src="{{asset('/images/clients/'.@$client->image)}}" title="" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(count($latestPosts) > 0)
        <div class="rs-blog style2 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle md-mb-30">
                    <div class="col-lg-5 mb-20 md-mb-10">
                        <div class="sec-title2">
                            <div class="sub-text">News Updates</div>
                            <h2 class="title mb-23">Read our latest updates & business <span>news.</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-20">
                        <div class="btn-part text-right md-left">
                            <a class="readon consultant discover" href="{{ route('blog.frontend') }}">View Updates</a>
                        </div>
                    </div>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                     data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                     data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                     data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true"
                     data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                     data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                     data-md-device-nav="false" data-md-device-dots="true">

                    @foreach(@$latestPosts as $post)
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#">
                                    <img class="lazy" data-src="{{asset('/images/blog/'.@$post->image)}}" alt="Blog">
                                </a>
                                <ul class="post-categories">
                                    <li><a href="{{route('blog.single',$post->slug)}}">{{ucfirst(@$post->category->name)}} </a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta mb-10">
                                    <li class="date"> <i class="fa fa-calendar-check-o"></i> {{date('d M Y', strtotime($post->created_at))}}</li>
                                </ul>
                                <h3 class="blog-title">
                                    <a href="{{route('blog.single',@$post->slug)}}">
                                        {{ucfirst(@$post->title)}}
                                    </a>
                                </h3>
                                <p>
                                    {{ elipsis( strip_tags(@$post->description)) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(count($testimonials) > 0)
        <div class="rs-testimonial style4 bg2 pt-95 pb-100 md-pt-65 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-60 md-mb-40">
                    <span class="sub-text small white-color">Testimonials</span>
                    <h2 class="title title3 white-color">Customers <span> Reviews. </span></h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">

                    @foreach($testimonials as $testimonial)
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img class="lazy" data-src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="">
                                </div>
                                <div class="item-contents">
                                    <p>{{ucfirst($testimonial->description)}}</p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">{{ucfirst($testimonial->name)}}</div>
                                    <span class="testi-title">{{ucfirst($testimonial->position)}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(@$setting_data->grievance_heading)
        <div class="rs-contact contact-style2 bg11 pt-95 pb-100 md-pt-65 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="{{@$setting_data->google_map ?? ''}}"
                                    width="600" height="400" style="border:0;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title2 mb-45 md-mb-30">
                            <div class="sub-text">Leading solutions</div>
                            <h2 class="title mb-23">
                                <?php
                                $split = explode(" ", @$setting_data->grievance_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$setting_data->grievance_heading)."\n"}}
                                <span> {{$split[count($split)-1]}} </span>
                            </h2>
                            <div class="desc mb-0 text-justify">
                                {{ ucfirst(@$setting_data->grievance_description) }}
                            </div>
                            <div class="btn-part mt-3">
                                <a class="readon consultant discover" href="{{route('contact')}}">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
@endsection
@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
