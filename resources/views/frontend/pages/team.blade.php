@extends('frontend.layouts.master')
@section('title') Team @endsection
@section('css')
    <style>
        .team-member:after{
            height: 340px;
        }
    </style>
@endsection
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img9">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">Our Team</h1>
            </div>
        </div>
    </div>
    <div id="rs-team" class="rs-team style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="team-item">
                            <div class="team-img">
                                <a>
                                    <img class="lazy" data-src="{{ ($team->image!==null) ? asset('/images/teams/'.$team->image ):''}}" alt="">
                                </a>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="name">
                                        <a>{{ucfirst(@$team->name)}}</a>
                                    </div>
                                    <span class="post">{{ucfirst(@$team->post)}}</span>
                                </div>
                                @if(!empty(@$team->fb) || !empty(@$team->twitter) || !empty(@$team->linkedin) || !empty(@$team->insta))
                                    <ul class="social-icon">
                                        @if(!empty(@$team->fb))
                                            <li><a href="{{@$team->fb}}" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                        @endif
                                        @if(!empty(@$team->twitter))
                                            <li><a href="{{$team->twitter}}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                        @endif
                                        @if(!empty(@$team->linkedin))
                                            <li><a href="{{$team->linkedin}}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                        @endif
                                        @if(!empty(@$team->insta))
                                            <li><a href="{{ $team->insta }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        @endif
                                    </ul>
                                @endif
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
