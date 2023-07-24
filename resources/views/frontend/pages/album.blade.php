@extends('frontend.layouts.master')
@section('title') Album @endsection
@section('styles')
@endsection
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img10">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">Our Albums</h1>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <div class="rs-project style3 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                @foreach($albums as $album)
                    <div class="col-lg-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{route('album.gallery',$album->slug)}}">
                                <img class="lazy" data-src="{{asset('/images/albums/'.@$album->cover_image)}}" alt="" />
                            </a>
                        </div>
                        <div class="project-content">
                            <div class="portfolio-inner">
                                <span class="category"><a href="{{route('album.gallery',$album->slug)}}">Images: ({{count(@$album->gallery)}})</a></span>
                                <h3 class="title"><a href="{{route('album.gallery',$album->slug)}}">{{ucwords(@$album->name)}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Project Section End -->
    </div>
@endsection


