@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
		.home-one a.active {
		color: #fc653c !important;
	}

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->title)}} | {{ucwords(@$setting_data->website_name ?? 'Careerlink')}}   </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleService->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleService->meta_tags)}}' />
    <meta property='article:published_time' content='{{@$singleService->updated_at ?? @$singleService->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleService->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleService->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? 'Careerlink')}} " />
    <meta property="og:image" content="{{asset('/images/service/'.@$singleService->banner_image)}}" />
    <meta property="og:image:url" content="{{asset('/images/service/'.@$singleService->banner_image)}}" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

    <div class="rs-breadcrumbs img4">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">{{@$singleService->title}}</h1>
            </div>
        </div>
    </div>

    <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-last">
                    @include('frontend.pages.services.sidebar')
                </div>
                <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details">
                                <div class="bs-img mb-35">
                                     <img class="lazy" data-src="{{asset('/images/service/'.@$singleService->banner_image)}}" alt="">
                                </div>
                                <div class="blog-full">
                                    <ul class="single-post-meta">
                                        <li>
                                            <span class="p-date"><i class="fa fa-calendar-check-o"></i>
                                                {{date('j M, Y',strtotime(@$singleService->created_at))}}
                                            </span>
                                        </li>
                                    </ul>
                                    <h3>{{ ucwords(@$singleService->title) }}</h3>
                                    <div class="custom-description">
                                        {!! @$singleService->description ?? ''!!}
                                    </div>
                                    <div class="rs-counter style1 project-single bg23">
                                        <div class="container">
                                            <div class="row">
                                                <h3 class="title title4" style="padding-bottom: 0px!important;font-size: 20px; margin-bottom: 4px;">
                                                    Share
                                                </h3>
                                                <div class="col-lg-12">
                                                    <ul class="footer-social md-mb-30">
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook" onclick='fbShare("{{route('service.single',$singleService->slug)}}")'></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    function fbShare(url) {
      window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
    }
    function twitShare(url, title) {
        window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
    }
    function whatsappShare(url, title) {
        message = title + " " + url;
        window.open("https://api.whatsapp.com/send?text=" + message);
    }
    $( document ).ready(function() {
        let selector = $('.custom-description').find('table').length;
        if(selector>0){
            $('.custom-description').find('table').addClass('table table-bordered');
        }
    });
</script>
@endsection
