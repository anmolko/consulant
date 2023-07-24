@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('css')
    <style>
        .img-wrapper {
            height: 100px;
            object-fit: cover;
        }
        #gallery img.img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/lightbox.css')}}">
@endsection
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">Our Clients</h1>
            </div>
        </div>
    </div>

    <div class="rs-project style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="gridFilter mb-50 md-mb-30 text-center">
                <button class="active" data-filter="*">All</button>
                @foreach($country as $index=>$cn)
                    <button data-filter=".{{$index}}">{{ ucfirst($cn) }}</button>
                @endforeach

            </div>
            <div class="row grid rs-project">

                @foreach($clients as $client)
                    <div class="col-lg-4 col-md-6 mb-30 grid-item {{$client->country}}">
                        <div class="box-inner">
                            <div class="box-item">
                                <div class="icon-box">
                                    <a href="#"><img class="dance_hover" src="{{asset('/images/clients/'.@$client->image)}}" alt=""></a>
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
    <script src="{{asset('assets/frontend/js/plugins/lightbox.min.js')}}"></script>
@endsection
