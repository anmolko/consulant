@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>

    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
@endsection
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img4">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">Our Services</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <div class="rs-services style2  pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-last">
                    @include('frontend.pages.services.sidebar')
                </div>
                <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                    <div class="row">
                        @foreach(@$allservices as $index=>$service)
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="service-wrap">
                                    <div class="image-part">
                                        <img class="lazy" data-src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="" />
                                    </div>
                                    <div class="content-part">
                                        <h3 class="title"><a href="{{route('service.single',$service->slug)}}">
                                                {{ucwords(@$service->title)}}
                                            </a></h3>
                                        <div class="desc">{{ elipsis(strip_tags($service->description))}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-12">
                            <div class="pagination-area">
                                {{ $allservices->links('vendor.pagination.default') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- Main content End -->


@endsection
