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
    <title>{{ucfirst(@$row->title)}} | {{ucwords(@$row->website_name ?? '')}}   </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$row->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$row->meta_tags)}}' />
    <meta property='article:published_time' content='{{@$row->updated_at ?? @$row->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$row->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$row->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? '')}} " />
    <meta property="og:image" content="{{asset('/images/course/'.@$row->image)}}" />
    <meta property="og:image:url" content="{{asset('/images/course/'.@$row->image)}}" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

    <section class="page-title" style="background-image: url({{ asset('assets/frontend/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">{{ $row->title }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Course Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Start courses Details-->
    <section class="course-details">
        <div class="container">
            <div class="row flex-xl-row-reverse">
                <!--Start courses Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="courses-details__content">
                        <img src="{{ @$row->image ? asset('/images/course/'.@$row->image):''}}" alt="" />
                        <div class="sec-title text-center mb-20">
                            <h2 class="mt-4">{{ $row->title }}</h2>
                        </div>
                        <section class="product-description">
                            <div class="container pt-0 pb-90">
                                <div class="product-discription">
                                    <div class="tabs-box">
                                        <div class="tab-btn-box text-center">
                                            <ul class="tab-btns tab-buttons clearfix">

                                                @if($row->description)
                                                    <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                                                @endif
                                                @if($row->living)
                                                    <li class="tab-btn" data-tab="#tab-2">Living</li>
                                                @endif
                                                @if($row->entry_requirement)
                                                    <li class="tab-btn" data-tab="#tab-3">Entry Requirements</li>
                                                @endif
                                                @if($row->visa_requirement)
                                                    <li class="tab-btn" data-tab="#tab-4">Visa Requirements</li>
                                                @endif
                                                @if($row->education_cost)
                                                    <li class="tab-btn" data-tab="#tab-5">Education Cost</li>
                                                @endif
                                                @if($row->after_graduation)
                                                    <li class="tab-btn" data-tab="#tab-6">After Graduation</li>
                                                @endif
                                                @if($row->useful_links)
                                                    <li class="tab-btn" data-tab="#tab-7">Useful Links</li>
                                                @endif

                                            </ul>
                                        </div>
                                        <div class="tabs-content">
                                            <div class="tab active-tab" id="tab-1">
                                                <div class="text">
                                                    <h3 class="product-description__title">Description</h3>
                                                    <p class="product-description__text1">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci
                                                        phaedrum. There are many variations of passages of Lorem Ipsum available, but the majority have
                                                        alteration in some injected or words which don't look even slightly believable. If you are going to
                                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the
                                                        middle of text.
                                                    </p>
                                                    <div class="product-description__list">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <p><span class="fa fa-arrow-right"></span> Nam at elit nec neque suscipit gravida.</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="fa fa-arrow-right"></span> Aenean egestas orci eu maximus tincidunt.</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="fa fa-arrow-right"></span> Curabitur vel turpis id tellus cursus laoreet.
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p class="product-description__tex2">All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                                                        dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                                                        generate Lorem Ipsum which looks reasonable.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="tab" id="tab-2">
                                                <div class="customer-comment">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                                            <div class="single-comment-box">
                                                                <div class="inner-box">
                                                                    <figure class="comment-thumb"><img src="images/resource/testi-thumb-1.html" alt=""></figure>
                                                                    <div class="inner">
                                                                        <ul class="rating clearfix">
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                        </ul>
                                                                        <h5>Jon D. William, <span>20 Sep, 2022 . 4:00 pm</span></h5>
                                                                        <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                                            <div class="single-comment-box">
                                                                <div class="inner-box">
                                                                    <figure class="comment-thumb"><img src="images/resource/testi-thumb-2.html" alt=""></figure>
                                                                    <div class="inner">
                                                                        <ul class="rating clearfix">
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                        </ul>
                                                                        <h5>Aleesha Brown, <span>22 Sep, 2022 . 8:00 pm</span></h5>
                                                                        <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-box">
                                                    <h3>Add Your Comments</h3>
                                                    <form id="contact_form" name="contact_form" class="" action="https://kodesolution.com/html/2022/vizox-html/includes/sendmail.php" method="post">
                                                        <div class="mb-3">
                                                            <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                            <div class="review-box clearfix">
                                                                <p>Your Review</p>
                                                                <ul class="rating clearfix">
                                                                    <li><i class="far fa-star"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                            <div class="form-group clearfix">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control material-checkbox">
                                                                        <input type="checkbox" class="material-control-input">
                                                                        <span class="material-control-indicator"></span>
                                                                        <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
                <!--End courses Details Content-->

                <!--Start courses Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    @include('frontend.pages.course.sidebar')
                </div>
                <!--End courses Details Sidebar-->
            </div>
        </div>
    </section>

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
