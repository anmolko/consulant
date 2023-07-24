<!--End Clients Section -->
<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="upper-box">
            <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt=""></a></div>
            <div class="subscribe-form">
                <h5 class="title">Subscribe to Newsletter</h5>
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                        <button type="button" class="theme-btn btn-style-one"><span class="btn-title">Subscribe</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4">
                    <div class="footer-widget about-widget">
                        <h5 class="widget-title">Contact</h5>
                        <div class="text">66 Road Broklyn Street, 600 <br>New York, USA</div>
                        <ul class="contact-info">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:needhelp@potisen.com">needhelp@company.com</a><br></li>
                            <li><i class="fa fa-phone-square"></i> <a href="tel:+926668880000">+92 666 888 0000</a><br>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-xl-6 col-lg-8 col-md-12 mb-0">
                    <div class="footer-widget links-widget">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Explore</h5>
                                <ul class="user-links">
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Meet the Team</a></li>
                                    <li><a href="#">News & Media</a></li>
                                    <li><a href="#">Our Projects</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Visa</h5>
                                <ul class="user-links">
                                    <li><a href="#">Students Visa</a></li>
                                    <li><a href="#">Business Visa</a></li>
                                    <li><a href="#">Family Visa</a></li>
                                    <li><a href="#">Travel Visa</a></li>
                                    <li><a href="#">Work Visa</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Services</h5>
                                <ul class="user-links">
                                    <li><a href="#">PR Applicants</a></li>
                                    <li><a href="#">Visa Consultancy</a></li>
                                    <li><a href="#">Travel Insurance</a></li>
                                    <li><a href="#">Work Permits</a></li>
                                    <li><a href="#">Abroad Study</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget gallery-widget">
                        <h5 class="widget-title">Gallery</h5>
                        <div class="widget-content">
                            <div class="outer clearfix">
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-1.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-2.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-3.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-4.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-5.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">&copy; Copyright 2023 by <a href="index.html">Company.com</a>
                </div>
                <ul class="social-icon-two">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->
</div><!-- End Page Wrapper -->
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
<script src="{{ asset('assets/frontend/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
<script src="{{ asset('assets/frontend/js/script.js') }}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
