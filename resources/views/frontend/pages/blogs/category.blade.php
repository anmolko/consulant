@extends('frontend.layouts.master')
@section('title') {{ucwords(@$cat_name)}} | Blog @endsection
@section('css')
<style>
.home-one a.active {
    color: #27aae1;
}
</style>
@endsection
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img4">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">{{ucwords($cat_name)}}</h1>
                <span class="sub-text">
                    Blog Category
                </span>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Blog Section Start -->
    <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-last">
                    @include('frontend.pages.blogs.sidebar')
                </div>
                <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                    <div class="row">
                        @foreach($allPosts as $post)
                            <div class="col-lg-6 col-md-12 mb-50">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="{{route('blog.single',$post->slug)}}">
                                            <img class="lazy" data-src="{{asset('/images/blog/'.@$post->image) }}"  alt=""></a>
                                        <ul class="post-categories">
                                            <li><a href="{{route('blog.single',$post->slug)}}">{{ucfirst(@$post->category->name)}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="blog-title"><a href="{{route('blog.single',$post->slug)}}">
                                                {{@$post->title}}</a></h3>
                                        <div class="blog-meta">
                                            <ul class="btm-cate">
                                                <li>
                                                    <div class="blog-date">
                                                        <i class="fa fa-calendar-check-o"></i>{{date('d M Y', strtotime($post->created_at))}}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-desc">
                                            {{ elipsis( strip_tags(@$post->description)) }}
                                        </div>
                                        <div class="blog-button">
                                            <a class="blog-btn" href="{{route('blog.single',$post->slug)}}">Continue Reading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-12">
                            <div class="pagination-area">
                                {{ $allPosts->links('vendor.pagination.default') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Section End -->
    </div>


@endsection
