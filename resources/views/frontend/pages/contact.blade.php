
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
@section('css')
@endsection
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img9">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">Contact us</h1>
            </div>
        </div>
    </div>

    <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                    @if(@$setting_data->google_map)
                        <div class="contact-map">
                            <iframe class="contact-map" src="{{@$setting_data->google_map}}"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="sec-title mb-45 md-mb-25">
                        <h2 class="title pb-20">
                            Let us help your business to move <span>forward.</span>
                        </h2>
                    </div>
                    <div class="contact-wrap">
                        <div id="form-messages"></div>
                        <form id="contact-form" name="contact" class="" action="{{route('contact.store')}}" method="post">
                           @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="name" name="name"
                                               placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="email" name="email"
                                               placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="phone" name="phone"
                                               placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="Website" name="subject"
                                               placeholder="Your Website" required="">
                                    </div>

                                    <div class="col-lg-12 mb-35">
                                            <textarea class="from-control" id="message" name="message"
                                                      placeholder="Your message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon submit" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Icon Section Start -->
        <div class="rs-contact main-home">
            <div class="container">
                <div class="contact-icons-style box-address pt-100 md-pt-70">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 md-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('assets/frontend/images/contact/icons/1.png') }}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a>Office</a></h2>
                                    <p class="services-txt">{{@$setting_data->address}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 xs-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('assets/frontend/images/contact/icons/3.png') }}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="mailto:{{@$setting_data->email}}">Email us</a></h2>
                                    <a href="mailto:{{@$setting_data->email}}">{{@$setting_data->email}}</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('assets/frontend/images/contact/icons/4.png') }}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="tel:{{@$setting_data->phone ?? $setting_data->mobile}}">Call us</a></h2>
                                    <a href="tel:{{@$setting_data->phone}}">{{@$setting_data->phone}}</a><br>
                                    <a href="tel:{{@$setting_data->mobile}}">{{@$setting_data->mobile}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Icon Section End -->
    </div>
@endsection
@section('js')
    <!-- For Contact Form -->
    <script src="{{asset('assets/frontend/js/contact.form.js')}}"></script>

    @include('frontend.partials.toast_alert')

@endsection
