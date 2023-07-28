@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    @if(count($sliders) > 0)
        <section class="banner-section-two">
            <div class="banner-carousel owl-carousel owl-theme">
                @foreach(@$sliders as $index=>$slider)
                    <div class="slide-item">
                    <div class="bg-image" style="background-image: url({{ asset('/images/sliders/'.$slider->image) }});"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <?php $split = explode(" ", @$slider->heading);?>
                            <span class="text-last"></span>
                            <span class="sub-title animate-1">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$slider->heading)."\n"}}</span>
                            <div class="inner">
                                <h1 class="title animate-2">{{$split[count($split)-1]}}</h1>
                                <h3 class="animate-3">{{@$slider->subheading ?? ''}}</h3>
                                @if(@$slider->link)
                                    <div class="btn-box animate-4">
                                        <a href="{{@$slider->link ?? ''}}" class="theme-btn btn-style-one"><span class="btn-title">{{@$slider->button ?? 'Start Exploring'}}</span></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    @endif

    <section class="features-section-three">
        <div class="row g-0">
            <!-- Feature Block Three -->
            <div class="feature-block-three col-xl-4 col-lg-6 col-md-12 wow fadeInUp">
                <div class="inner-box ">
                    <div class="content-box">
                        <i class="icon flaticon-group"></i>
                        <h4 class="title"><a>Our Mission</a></h4>
                        <span class="sub-title"> {{ ucfirst(@$homepage_info->mission) }}</span>
                    </div>
                </div>
            </div>
            <!-- Feature Block Three -->
            <div class="feature-block-three col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box ">
                    <div class="content-box">
                        <i class="far fa-flag"></i>
                        <h4 class="title"><a>Our Vision</a></h4>
                        <span class="sub-title">{{ ucfirst(@$homepage_info->vision) }}</span>
                    </div>
                </div>
            </div>
            <!-- Feature Block Three -->
            <div class="feature-block-three col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box ">
                    <div class="content-box">
                        <i class="icon flaticon-life-insurance"></i>
                        <h4 class="title"><a>Our Value</a></h4>
                        <span class="sub-title">{{ ucfirst(@$homepage_info->value) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($homepage_info->welcome_description))
        <section class="about-section-five">
            <div class="auto-container">
                <div class="anim-icons">
                    <span class="icon icon-object-3"></span>
                </div>
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">{{$homepage_info->welcome_subheading ?? ''}}</span>
                                <h2>{{  @$homepage_info->welcome_heading }}</h2>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->welcome_description) }}
                                </div>
                            </div>
                            @if(@$homepage_info->welcome_link)
                                <div class="btn-box">
                                    <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" class="info-btn">
                                        <i class="icon fa fa-phone"></i>
                                        <small>Call Anytime</small> {{@$setting_data->phone ?? $setting_data->mobile  ?? ''}}
                                    </a>
                                    <a href="{{@$homepage_info->welcome_link}}" class="theme-btn btn-style-one"><span class="btn-title">  {{ @$homepage_info->welcome_button }}</span></a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12">
                        <div class="inner-column wow fadeInLeft">
                            <figure class="image overlay-anim wow fadeInUp">
                                <img class="lazy" data-src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($latestServices) > 0)
        <section class="training-section">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="sub-title">What we offer</span>
                    <h2>The services we provide<br>for you.</h2>
                </div>

                <div class="carousel-outer">
                    <div class="training-carousel owl-carousel owl-theme">
                        @foreach(@$latestServices as $index=>$service)
                            <div class="training-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{route('service.single',$service->slug)}}">
                                                <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="info-box">
                                            <h5 class="title"><a href="{{route('service.single',$service->slug)}}"> {{ucwords(@$service->title)}}</a></h5>
                                            <a href="{{route('service.single',$service->slug)}}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="info-box">
                                            <h5 class="title"><a href="{{route('service.single',$service->slug)}}"> {{ucwords(@$service->title)}}</a></h5>
                                            <div class="text">{{ elipsis( strip_tags($service->description) )}}</div>
                                            <a href="{{route('service.single',$service->slug)}}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="call-to-action-two pull-up" style="background-image: url( {{ asset('assets/frontend/images/cta/01.jpeg') }})">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-box">
                        <h2 class="title">We provide counselling students <br>to get study visa</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video-box">
                        <div class="inner">
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-one light"><span class="btn-title">Contact us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($latestcourses) > 0)
        <section class="services-section">
            <div class="anim-icons">
                <span class="icon icon-object-2"></span>
                <span class="icon icon-object-3"></span>
            </div>
            <div class="auto-container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-7">
                            <span class="sub-title">Start your journey</span>
                            <h2>Study Abroad with <br>our programme.</h2>
                        </div>
                        <div class="col-lg-5">
                            <div class="text">Enrolling in Study Abroad Programs offers you the chance to embrace the world as your educational playground.</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach(@$latestcourses as $index=>$latest)
                        <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="{{ route('study-abroad.single', $latest->slug) }}">
                                            <img src="{{ @$latest->image ? asset('/images/course/'.@$latest->image):''}}" alt=""></a>
                                    </figure>
                                    <div class="icon-box"><i class="icon fa fa-graduation-cap"></i></div>
                                </div>
                                <div class="content-box">
                                    <h5 class="title"><a href="{{ route('study-abroad.single', $latest->slug) }}">
                                            {{ $latest->title ?? '' }}
                                        </a></h5>
                                    <div class="text">
                                        {{ elipsis( strip_tags($latest->description ?? '') )}}
                                    </div>
                                    <a href="{{ route('study-abroad.single',$latest->slug) }}" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(count($latesttests) > 0)
        <section class="training-section-two">
            <div class="bg-layer"></div>
            <div class="outer-box pull-up">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="sec-title">
                                <span class="sub-title">Training & Tests</span>
                                <h2>Get the best trainings <br> you deserve.</h2>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="video-box">
                                <div class="inner">
                                    <a href="{{ route('test-preparation.list') }}" class="theme-btn btn-style-one light"><span class="btn-title">View All</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach(@$latestcourses as $index=>$latest)
                            <div class="training-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{ route('test-preparation.single', $latest->slug) }}">
                                                <img src="{{ @$latest->image ? asset('/images/test_preparation/'.@$latest->image):''}}" alt=""></a>
                                        </figure>
                                        <div class="info-box">
                                            <h5 class="title"><a href="{{ route('test-preparation.single', $latest->slug) }}">
                                                    {{ $latest->title ?? ''}}
                                                </a></h5>
                                            <div class="text">
                                                {{ elipsis( strip_tags($latest->summary ?? '') )}}
                                            </div>
                                            <a href="{{ route('test-preparation.single', $latest->slug) }}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="training-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Training & Certification</span>
                <h2>Get the Immigration <br>Trainings you Deserve.</h2>
            </div>
            <div class="carousel-outer">
                <div class="training-carousel owl-carousel owl-theme">
                    <!-- Training Block Three-->
                    <div class="training-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img src="images/resource/course-8.jpg" alt=""></a>
                                </figure>
                                <a href="page-course-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-course-details.html">Citizenship Test</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-course-details.html">Citizenship Test</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Training Block -->
                    <div class="training-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img src="images/resource/course-9.jpg" alt=""></a>
                                </figure>
                                <a href="page-course-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="#">Take IELTS</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-course-details.html">Take IELTS</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Training Block -->
                    <div class="training-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img src="images/resource/course-10.jpg" alt=""></a>
                                </figure>
                                <a href="page-course-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-course-details.html">PTE Coaching</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-course-details.html">PTE Coaching</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Training Block -->
                    <div class="training-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img src="images/resource/course-11.jpg" alt=""></a>
                                </figure>
                                <a href="page-course-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="#">TOEFL Coaching</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-course-details.html">TOEFL Coaching</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section-two pt-0">
        <div class="anim-icons full-width">
            <span class="icon icon-cards"></span>
            <span class="icon icon-object-1"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our work process</span>
                <h2>Get your Visa Approved in <br>4 Simple Steps.</h2>
            </div>
            <div class="row">
                <!-- Process block Two  -->
                <div class="process-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-interview-1"></i>
                            <span class="count">01</span>
                        </div>
                        <div class="info-box">
                            <h5 class="title">Interview</h5>
                            <div class="text">Lorem Ipsum is simply dummy text of the new des printng and type.</div>
                        </div>
                    </div>
                </div>
                <!-- Process block Two  -->
                <div class="process-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-form"></i>
                            <span class="count">02</span>
                        </div>
                        <div class="info-box">
                            <h5 class="title">Fill Form</h5>
                            <div class="text">Lorem Ipsum is simply dummy text of the new des printng and type.</div>
                        </div>
                    </div>
                </div>
                <!-- Process block Two  -->
                <div class="process-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-documents"></i>
                            <span class="count">03</span>
                        </div>
                        <div class="info-box">
                            <h5 class="title">Documentation</h5>
                            <div class="text">Lorem Ipsum is simply dummy text of the new des printng and type.</div>
                        </div>
                    </div>
                </div>
                <!-- Process block Two -->
                <div class="process-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-visa-3"></i>
                            <span class="count">04</span>
                        </div>
                        <div class="info-box">
                            <h5 class="title">Get Visa</h5>
                            <div class="text">Lorem Ipsum is simply dummy text of the new des printng and type.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section Two -->
    <!-- Testimonial Section Three-->
    <section class="testimonial-section-three">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-lg-4 col-md-12">
                    <div class="sec-title">
                        <span class="sub-title">Our testimonials</span>
                        <h2>What They are Talking About Company.</h2>
                    </div>
                </div>
                <div class="testimonial-column col-lg-8 col-md-12">
                    <div class="carousel-outer">
                        <div class="testimonial-carousel-two owl-carousel owl-theme">
                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/testimonial-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="text">I was very impresed by the company service lore ipsum is simply
                                            free text used by copy typing refreshing. Neque porro est qui dolorem ipsum
                                            quia.</div>
                                        <div class="info-box">
                                            <h5 class="name">Kevin Martin</h5>
                                            <span class="designation">Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/testimonial-2.jpg" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="text">I was very impresed by the company service lore ipsum is simply
                                            free text used by copy typing refreshing. Neque porro est qui dolorem ipsum
                                            quia.</div>
                                        <div class="info-box">
                                            <h5 class="name">Aleesha Brown</h5>
                                            <span class="designation">Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/testimonial-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="text">I was very impresed by the company service lore ipsum is simply
                                            free text used by copy typing refreshing. Neque porro est qui dolorem ipsum
                                            quia.</div>
                                        <div class="info-box">
                                            <h5 class="name">Kevin Martin</h5>
                                            <span class="designation">Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/testimonial-2.jpg" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="text">I was very impresed by the company service lore ipsum is simply
                                            free text used by copy typing refreshing. Neque porro est qui dolorem ipsum
                                            quia.</div>
                                        <div class="info-box">
                                            <h5 class="name">Aleesha Brown</h5>
                                            <span class="designation">Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/testimonial-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="text">I was very impresed by the company service lore ipsum is simply
                                            free text used by copy
                                            typing refreshing. Neque porro est qui dolorem ipsum quia.</div>
                                        <div class="info-box">
                                            <h5 class="name">Kevin Martin</h5>
                                            <span class="designation">Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/testimonial-2.jpg" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="text">I was very impresed by the company service lore ipsum is simply
                                            free text used by copy
                                            typing refreshing. Neque porro est qui dolorem ipsum quia.</div>
                                        <div class="info-box">
                                            <h5 class="name">Aleesha Brown</h5>
                                            <span class="designation">Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
    <!-- Features Section Five -->
    <section class="features-section-five">
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-xl-6 col-lg-12">
                    <div class="title-box">
                        <h4 class="title">Let’s Migrate to Your Favourite Destination</h4>
                        <figure class="image"><img src="images/resource/feature-2.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="features-column col-xl-6 col-lg-12">
                    <div class="inner-column">
                        <div class="text">Lorem ipsum dolor sit conseng adipiscing elit vehicula est eget felis vehicula imperdiet non lacus at quam gravida porta usce.</div>
                        <ul class="features-list">
                            <li>Entering & Leaving From Country</li>
                            <li>Visas</li>
                            <li>Country Citizenship</li>
                            <li>Settling In Country</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section Two -->
    <!-- News Section Three -->
    <section class="news-section-three">
        <div class="anim-icons">
            <span class="icon icon-object-2"></span>
        </div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="sec-title">
                        <span class="sub-title">recent news feed</span>
                        <h2>Latest News & Articles <br>From the Blog.</h2>
                    </div>
                </div>
                <div class="btn-column text-end col-lg-4">
                    <a href="news-details.html" class="theme-btn btn-style-one bg-theme-color4 mb-4"><span class="btn-title">View All news</span></a>
                </div>
            </div>
            <div class="row">
                <div class="column col-xl-6 col-lg-5 col-md-12 col-sm-12 wow fadeInLeft">
                    <!-- News Block -->
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="images/resource/news-7.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">The Human Rights and Democracy Study Visa Programms</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-xl-6 col-lg-7 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <!-- News Block -->
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="images/resource/news-8.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h5 class="title"><a href="news-details.html">The Common Mistakes you Make in Application</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="images/resource/news-9.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h5 class="title"><a href="news-details.html">The Common Mistakes you Make in Application</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- News Block -->
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="images/resource/news-10.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h5 class="title"><a href="news-details.html">The Common Mistakes you Make in Application</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->
    <!-- Clients Section -->
    <section class="clients-section style-three">
        <div class="auto-container">
            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <img src="images/resource/client-2.png" alt=""> </li>
                    <li class="slide-item"> <img src="images/resource/client-2.png" alt=""> </li>
                    <li class="slide-item"> <img src="images/resource/client-2.png" alt=""> </li>
                    <li class="slide-item"> <img src="images/resource/client-2.png" alt=""> </li>
                    <li class="slide-item"> <img src="images/resource/client-2.png" alt=""> </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
