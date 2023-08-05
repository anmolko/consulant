@extends('frontend.layouts.seo_master')
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} |  {{ucwords(@$setting_data->website_name ?? 'Careerlink')}}</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='{{ @$singleBlog->updated_at ?? $singleBlog->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? 'Careerlink')}}" />
    <meta property="og:image" content="{{asset('/images/blog/'.@$singleBlog->image)}}" />
    <meta property="og:image:url" content="{{asset('/images/blog/'.@$singleBlog->image)}}" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

    <section class="page-title" style="background-image: url({{ asset('assets/frontend/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title"> {{ @$singleBlog->title }}  </h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li> Blog details </li>
                </ul>
            </div>
        </div>
    </section>

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img class="lazy" data-src="{{ asset('/images/blog/'.@$singleBlog->image)}}" alt="">
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><i class="fas fa-calendar-alt"></i> {{date('M Y',strtotime(@$singleBlog->created_at))}} </li>
                            </ul>
                            <h3 class="blog-details__title">{{ ucwords(@$singleBlog->title) }}</h3>
                            <div class="blog-details__text-2 custom-description">{!! $singleBlog->description !!}</div>
                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags"> <span>Category:</span>
                                <a href="{{route('blog.category',$singleBlog->category->slug)}}">{{@$singleBlog->category->name }}</a>
                            </p>
                            <div class="blog-details__social-list">
                                <a href="#"><i class="fab fa-facebook" onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")'></i></a>
                                <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
                                <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
                            </div>
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
                $('.custom-description').find('table').addClass('table table-bordered table-responsive');
            }
        });
</script>
@endsection
