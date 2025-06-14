<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deconsult - Finance & Consulting HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{ asset('volf/assets/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('volf/assets/images/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700" rel="stylesheet">

   

    <link rel="stylesheet" href="{{ asset('volf/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('volf/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('volf/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('volf/assets/css/plugins.css') }}">
</head>

<body>

<div id="wrapper" class="wrapper">

    <div class="header sticky-header">
        <div class="header-toparea">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12">
                        <div class="header-topinfo">
                            <ul>
                                <li><a href="tel://+1-800-915-6270"><i class="fa fa-phone"></i> 1-800-915-6270</a></li>
                                <li><a href="mailto://contact@example.com"><i class="fa fa-envelope-o"></i>
                                        contact@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="header-topinfo text-right">
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Mon - Fri: 9:00 - 19:00 GMT-05</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottomarea">
            <div class="container">
                <div class="header-bottominner">
                    <div class="header-logo">
                        <a href="{{ route('volf.index') }}">
                            <img src="{{ asset('volf/assets/images/logo/logo.png') }}" alt="deconsult logo">
                        </a>
                    </div>
                    <nav class="tm-navigation">
                        <ul>
                            <li><a href="{{ route('volf.index') }}">Home</a></li>
                            <li><a href="{{ route('single.service') }}">Services</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="header-searchbox">
                        <form action="#" class="header-searchform">
                            <input type="text" placeholder="Enter search keyword..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-mobilemenu clearfix">
                    <div class="tm-mobilenav"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{{ asset('volf/assets/images/bg/bg-breadcrumb.jpg') }}">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2 class="tm-breadcrumb-title">Service Details</h2>
                <ul>
                    <li><a href="{{ route('volf.index') }}">Home</a></li>
                    <li><a href="{{ route('single.service') }}">Services</a></li>
                    <li>Financial Analysis</li>
                </ul>
            </div>
        </div>
    </div>
    <main class="page-content">
    {{ $slot }}
    </main>
    <div class="footer fixed-footer">
        <div class="footer-toparea tm-padding-section" data-bgimage="{{ asset('volf/assets/images/bg/footer-bg.jpg') }}" data-overlay="2">
            <div class="container">
                <div class="row widgets footer-widgets">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-info">
                            <a href="{{ route('volf.index') }}" class="widget-info-logo">
                                <img src="{{ asset('volf/assets/images/logo/logo-white.png') }}" alt="footer logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Rerum harum ipsum
                                quibusdam quas qui ratione inventore dolore natus recusandae assumenda.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-quicklinks">
                            <h5 class="widget-title">Quick Links</h5>
                            <ul>
                                <li><a href="{{ route('single.service') }}">Our Services</a></li>
                                <li><a href="{{ route('contact') }}">Contact With Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-recentpost">
                            <h5 class="widget-title">Recent Posts</h5>
                            <ul>
                                <li>
                                    <a href="blog-details.html" class="widget-recentpost-image">
                                        <img src="{{ asset('volf/assets/images/blog/thumbnails/blog-thumbnail-1.jpg') }}" alt="blog thumbnail">
                                    </a>
                                    <div class="widget-recentpost-content">
                                        <h6><a href="blog-details.html">Architecto earum maxime deleniti qui debitis</a></h6>
                                        <span>August 01, 2018</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.html" class="widget-recentpost-image">
                                        <img src="{{ asset('volf/assets/images/blog/thumbnails/blog-thumbnail-2.jpg') }}" alt="blog thumbnail">
                                    </a>
                                    <div class="widget-recentpost-content">
                                        <h6><a href="blog-details.html">Minus omnis eos eaque illum dolo</a></h6>
                                        <span>August 01, 2018</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.html" class="widget-recentpost-image">
                                        <img src="{{ asset('volf/assets/images/blog/thumbnails/blog-thumbnail-3.jpg') }}" alt="blog thumbnail">
                                    </a>
                                    <div class="widget-recentpost-content">
                                        <h6><a href="blog-details.html">Corporis eaque illum dolo</a></h6>
                                        <span>August 01, 2018</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-widget widget-newsletter">
                            <h5 class="widget-title">Get In Touch</h5>
                            <p>Get Business news, tips, and solutions to your problems from our experts.</p>
                            <form id="tm-mailchimp-form" class="widget-newsletter-form">
                                <input id="mc-email" type="email" placeholder="Enter email address">
                                <button id="mc-submit" type="submit" class="tm-button">Subscribe Now <b></b></button>
                            </form>
                            <div class="tm-mailchimp-alerts">
                                <div class="tm-mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="tm-mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyrightarea">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 col-12">
                        <p class="footer-copyright">Copyright ©2018 <a href="#">Thememarch</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="footer-copyrightsocial">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('volf/assets/js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('volf/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('volf/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('volf/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('volf/assets/js/plugins.js') }}"></script>
<script src="{{ asset('volf/assets/js/chart.min.js') }}"></script>
<script src="{{ asset('volf/assets/js/chart-active.js') }}"></script>
<script src="{{ asset('volf/assets/js/main.js') }}"></script>
</body>

</html>
