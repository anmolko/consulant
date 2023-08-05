@extends('frontend.layouts.master')
@section('title') Search | Blog @endsection

@section('content')

    <section class="page-title" style="background-image: url({{ asset('assets/frontend/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title"> Blog Search  </h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li> Search Result For : {{$query}}</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="row">
                        @foreach($allPosts as $index=>$post)
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="{{$index+2}}00ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{route('blog.single',$post->slug)}}">
                                                <img class="lazy" data-src="{{asset('/images/blog/thumb/thumb_'.@$post->image)}}" alt="">
                                            </a>
                                        </figure>
                                        <span class="date"><b>{{date('d', strtotime($post->created_at))}}</b> {{date('M Y', strtotime($post->created_at))}}</span>
                                    </div>
                                    <div class="content-box">
                                        <ul class="post-info">
                                            <li><i class="fa fa-list"></i> {{ucfirst(@$post->category->name)}} </li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{route('blog.single',@$post->slug)}}">
                                                {{ucfirst(@$post->title)}}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="news-block-two col-lg-12 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            {{ $allPosts->links('vendor.pagination.simple-bootstrap-4') }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    @include('frontend.pages.blogs.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
@endsection
