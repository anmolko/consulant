@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleAlbum->name)}} | Album @endsection
@section('css')
    <style>
        .img-wrapper {
            height: 270px;
            object-fit: cover;
        }
        #gallery img.img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/common/lightbox.css')}}">

@endsection
@section('content')

    <div class="rs-breadcrumbs img10">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">{{ucwords(@$singleAlbum->name)}}'s Gallery</h1>
            </div>
        </div>
    </div>



    <!-- Project Section Start -->
    <div class="rs-project style3 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                @if(count(@$singleAlbum->gallery) > 0)
                    <div id="gallery" style="padding: 0px 30px 0 30px;">
                        <div id="image-gallery">
                            <div class="row">
                                @foreach($singleAlbum->gallery as $gallery)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                        <div class="img-wrapper">
                                            <a href="{{asset('/images/albums/gallery/'.@$gallery->filename)}}">
                                                <img data-src="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" class="img-responsive lazy"></a>
                                            <div class="img-overlay">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div><!-- End row -->
                        </div><!-- End image gallery -->
                    </div><!-- End container -->
                @endif
            </div>
        </div>
    </div>
    <!-- Project Section End -->
    </div>



@endsection
@section('js')
    <script src="{{asset('assets/common/lightbox.min.js')}}"></script>
@endsection
