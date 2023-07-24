@extends('frontend.layouts.master')
@section('title') Client Testimonials @endsection
@section('css')
    <style>
        .blog-meta li:not(:last-child) {
            margin-right: 15px;
        }
        .blog-meta li:not(:first-child) {
            padding-left: 15px;
            border-left: 2px solid #0066ff;
        }
        .justify-content{
            text-align: justify;
            font-size: 18px;
        }
    </style>
@endsection
@section('content')
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Testimonials</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-customer-feedback-area-six rts-section-gap bg-feedback-seven">
        <div class="container">
            <div class="row mt--40">
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-6">
                        <div class="rts-client-reviews-h2 six">
                        <div class="review-header">
                            <a href="#" class="thumbnail">
                                <img class="lazy" data-src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="">
                            </a>
                            <div class="discription">
                                <a>
                                    <h6 class="title">{{ucfirst($testimonial->name)}}</h6>
                                </a>
                                <span>{{ucfirst($testimonial->position)}}</span>
                            </div>
                        </div>
                        <div class="review-body">
                            <p class="disc">
                                {{ucfirst($testimonial->description)}}
                            </p>
                            <div class="body-end">
                            </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
