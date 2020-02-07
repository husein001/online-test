{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="description" content="">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
    {{--<!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->--}}

    {{--<!-- Title -->--}}
    {{--<title>Главная</title>--}}

    {{--<!-- Favicon -->--}}
    {{--<link rel="icon" href="/img/core-img/favicon.ico">--}}

    {{--<!-- Stylesheet -->--}}
    {{--<link rel="stylesheet" href="/css/style.css">--}}

{{--</head>--}}

{{--<body>--}}
{{--<!-- Preloader -->--}}
{{--<div id="preloader">--}}
    {{--<div class="spinner"></div>--}}
{{--</div>--}}

{{--<!-- ##### Header Area Start ##### -->--}}
{{--<header class="header-area">--}}

    {{--<!-- Top Header Area -->--}}
    {{--<div class="top-header-area d-flex justify-content-between align-items-center">--}}
        {{--<!-- Contact Info -->--}}
        {{--<div class="contact-info">--}}
            {{--<a href="#"><span>Phone:</span> +992 935 66 9514</a>--}}
            {{--<a href="#"><span>Email:</span> info@online-test.ehost.tj</a>--}}
        {{--</div>--}}
        {{--<!-- Follow Us -->--}}
        {{--<div class="follow-us">--}}
            {{--<span>Follow us</span>--}}
            {{--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
            {{--<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
            {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Navbar Area -->--}}
    {{--<div class="clever-main-menu">--}}
        {{--<div class="classy-nav-container breakpoint-off">--}}
            {{--<!-- Menu -->--}}
            {{--<nav class="classy-navbar justify-content-between" id="cleverNav">--}}

                {{--<!-- Logo -->--}}
                {{--<a class="nav-brand" href="/"><img src="img/core-img/logo(2).png" height="100px" width='180px'--}}
                                                   {{--alt=""></a>--}}

                {{--<!-- Navbar Toggler -->--}}
                {{--<div class="classy-navbar-toggler">--}}
                    {{--<span class="navbarToggler"><span></span><span></span><span></span></span>--}}
                {{--</div>--}}

                {{--<!-- Menu -->--}}
                {{--<div class="classy-menu">--}}

                    {{--<!-- Close Button -->--}}
                    {{--<div class="classycloseIcon">--}}
                        {{--<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>--}}
                    {{--</div>--}}

                    {{--<!-- Nav Start -->--}}
                    {{--<div class="classynav">--}}
                        {{--<ul>--}}
                            {{--<li><a href="/">Главная</a></li>--}}
                            {{--<li><a href="">Создать тест</a></li>--}}
                            {{--<li><a href="">Контакты</a></li>--}}
                        {{--</ul>--}}

                        {{--<!-- Search Button -->--}}
                        {{--<div class="search-area">--}}
                            {{--<form action="#" method="get">--}}
                                {{--<input type="search" name="search" id="search" placeholder="Поиск">--}}
                                {{--<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                        {{--<!-- Register / Login -->--}}
                        {{--<div class="register-login-area">--}}
                            {{--@guest--}}

                                {{--<a class="nav-link btn" href="{{ route('login') }}">{{ __('Вход') }}</a>--}}
                                {{--@if (Route::has('register'))--}}
                                    {{--<a class="btn active" href="{{ route('register') }}">{{ __('Регистрация') }}</a>--}}
                                {{--@endif--}}
                        {{--</div>--}}

                        {{--@else--}}

                            {{--<div class="login-state d-flex align-items-center">--}}
                                {{--<div class="user-name ">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" role="button" id="userName"--}}
                                           {{--data-toggle="dropdown" aria-haspopup="true"--}}
                                           {{--aria-expanded="false">{{Auth::user()->name}}</a>--}}

                                        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                            {{--<a class="dropdown-item" href="#">Профиль</a>--}}
                                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                                {{--{{ __('Выход') }}--}}
                                            {{--</a>--}}

                                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
                                                  {{--style="display: none;">--}}
                                                {{--@csrf--}}
                                            {{--</form>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--@endguest--}}
                            {{--</div>--}}
                            {{--<!-- Nav End -->--}}
                    {{--</div>--}}
            {{--</nav>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</header>--}}
{{--<!-- ##### Header Area End ##### -->--}}



{{--<!-- ##### Popular Courses Start ##### -->--}}
{{--<section class="popular-courses-area" style="background-image: url(/img/core-img/texture.png);">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<div class="section-heading" style="margin-top: 20px">--}}
                    {{--<h3>Все тесты</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-12" style="margin-top: -40px">--}}
            {{--<div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">--}}
                {{--@foreach($categories as $category)--}}
                    {{--<div class="single-catagories bg-img" style="background-color: #1d68a7 ;">--}}
                        {{--<a href="#">--}}
                            {{--<h6>{{ $category->name }}</h6>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}


        {{--<!-- Single Popular Course -->--}}
        {{--<div class="col-12 col-md-6 col-lg-4" style="margin-top: -30px">--}}
            {{--<div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">--}}
                {{--<!-- <img src="/img/bg-img/c1.jpg" alt=""> -->--}}
                {{--<!-- Course Content -->--}}
                {{--<div class="course-content">--}}
                    {{--<h4>English Grammar</h4>--}}
                    {{--<div class="meta d-flex align-items-center">--}}
                        {{--<span class="fa fa-user" aria-hidden="true" style="font-size:15px"></span>--}}

                        {{--<a href="#">Admin</a>--}}
                        {{--<span><i class="fa fa-circle" aria-hidden="true"></i></span>--}}
                        {{--<span class="fa fa-list-alt" aria-hidden="true" style="font-size:15px"></span>--}}
                        {{--<a href="#">Languages</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Seat Rating Fee -->--}}
                {{--<div class="seat-rating-fee d-flex justify-content-between">--}}
                    {{--<div class="seat-rating h-100 d-flex align-items-center">--}}
                        {{--<div class="seat">--}}
                            {{--<i class="fa fa-eye" aria-hidden="true"></i> 10--}}
                        {{--</div>--}}
                        {{--<!-- <div class="rating">--}}
                            {{--<i class="fa fa-star" aria-hidden="true"></i> 4.5--}}
                        {{--</div> -->--}}
                    {{--</div>--}}
                    {{--<div class="course-fee">--}}
                        {{--<a href="#" class="free"><span style="font-size:20px;">&raquo;</span></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}

{{--</section>--}}
{{--<!-- ##### Popular Courses End ##### -->--}}

{{--<!-- ##### Cool Facts Area Start ##### -->--}}
{{--<section class="cool-facts-area mt-2" style="margin-top: 60px !important;margin-bottom:-50px">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<!-- Single Cool Facts Area -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/img/core-img/docs.png" alt="">--}}
                    {{--</div>--}}
                    {{--<h2><span class="counter">1912</span></h2>--}}
                    {{--<h5>Success Stories</h5>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Cool Facts Area -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-cool-facts-area text-center  wow fadeInUp" data-wow-delay="500ms">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/img/core-img/star.png" alt="">--}}
                    {{--</div>--}}
                    {{--<h2><span class="counter">123</span></h2>--}}
                    {{--<h5>Dedicated Tutors</h5>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Cool Facts Area -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-cool-facts-area text-center wow fadeInUp" data-wow-delay="750ms">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/img/core-img/events.png" alt="">--}}
                    {{--</div>--}}
                    {{--<h2><span class="counter">89</span></h2>--}}
                    {{--<h5>Scheduled Events</h5>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Cool Facts Area -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-cool-facts-area text-center wow fadeInUp" data-wow-delay="1000ms">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/img/core-img/earth.png" alt="">--}}
                    {{--</div>--}}
                    {{--<h2><span class="counter">56</span></h2>--}}
                    {{--<h5>Available Courses</h5>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- ##### Cool Facts Area End ##### -->--}}


{{--<!-- ##### Best Tutors Start ##### -->--}}
{{--<section class="best-tutors-area">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<div class="section-heading">--}}
                    {{--<h3>Лучшие результаты</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">--}}

                    {{--<!-- Single Tutors Slide -->--}}
                    {{--<div class="single-tutors-slides">--}}
                        {{--<!-- Tutor Thumbnail -->--}}
                        {{--<div class="tutor-thumbnail">--}}
                            {{--<img src="/img/bg-img/t1.png" alt="">--}}
                        {{--</div>--}}
                        {{--<!-- Tutor Information -->--}}
                        {{--<div class="tutor-information text-center">--}}
                            {{--<h5>Alex Parker</h5>--}}
                            {{--<span>Teacher</span>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit,--}}
                                {{--sit amet tincidunt mauris ultrices vitae.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Single Tutors Slide -->--}}
                    {{--<div class="single-tutors-slides">--}}
                        {{--<!-- Tutor Thumbnail -->--}}
                        {{--<div class="tutor-thumbnail">--}}
                            {{--<img src="/img/bg-img/t2.png" alt="">--}}
                        {{--</div>--}}
                        {{--<!-- Tutor Information -->--}}
                        {{--<div class="tutor-information text-center">--}}
                            {{--<h5>Alex Parker</h5>--}}
                            {{--<span>Teacher</span>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit,--}}
                                {{--sit amet tincidunt mauris ultrices vitae.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Single Tutors Slide -->--}}
                    {{--<div class="single-tutors-slides">--}}
                        {{--<!-- Tutor Thumbnail -->--}}
                        {{--<div class="tutor-thumbnail">--}}
                            {{--<img src="img/bg-img/t3.png" alt="">--}}
                        {{--</div>--}}
                        {{--<!-- Tutor Information -->--}}
                        {{--<div class="tutor-information text-center">--}}
                            {{--<h5>Alex Parker</h5>--}}
                            {{--<span>Teacher</span>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit,--}}
                                {{--sit amet tincidunt mauris ultrices vitae.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Single Tutors Slide -->--}}
                    {{--<div class="single-tutors-slides">--}}
                        {{--<!-- Tutor Thumbnail -->--}}
                        {{--<div class="tutor-thumbnail">--}}
                            {{--<img src="/img/bg-img/t4.png" alt="">--}}
                        {{--</div>--}}
                        {{--<!-- Tutor Information -->--}}
                        {{--<div class="tutor-information text-center">--}}
                            {{--<h5>Alex Parker</h5>--}}
                            {{--<span>Teacher</span>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit,--}}
                                {{--sit amet tincidunt mauris ultrices vitae.</p>--}}
                            {{--<div class="social-info">--}}
                                {{--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Single Tutors Slide -->--}}
                    {{--<div class="single-tutors-slides">--}}
                        {{--<!-- Tutor Thumbnail -->--}}
                        {{--<div class="tutor-thumbnail">--}}
                            {{--<img src="/img/bg-img/t5.png" alt="">--}}
                        {{--</div>--}}
                        {{--<!-- Tutor Information -->--}}
                        {{--<div class="tutor-information text-center">--}}
                            {{--<h5>Alex Parker</h5>--}}
                            {{--<span>Teacher</span>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit,--}}
                                {{--sit amet tincidunt mauris ultrices vitae.</p>--}}
                            {{--<div class="social-info">--}}
                                {{--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- ##### Best Tutors End ##### -->--}}

{{--<!-- ##### Upcoming Events Start ##### -->--}}
{{--<section class="upcoming-events">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 mt-3" style="margin-bottom:-50px">--}}
                {{--<div class="section-heading">--}}
                    {{--<h3>Новые тесты</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<!-- Single Upcoming Events -->--}}
            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">--}}
                    {{--<!-- Events Thumb -->--}}
                    {{--<div class="events-thumb">--}}
                        {{--<img src="/img/bg-img/e1.jpg" alt="">--}}
                        {{--<h6 class="event-date">August 26</h6>--}}
                        {{--<h4 class="event-title">Networking Day</h4>--}}
                    {{--</div>--}}
                    {{--<!-- Date & Fee -->--}}
                    {{--<div class="date-fee d-flex justify-content-between">--}}
                        {{--<div class="date">--}}
                            {{--<p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>--}}
                        {{--</div>--}}
                        {{--<div class="events-fee">--}}
                            {{--<a href="#">&raquo;</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- ##### Upcoming Events End ##### -->--}}

{{--<!-- ##### Footer Area Start ##### -->--}}
{{--<footer class="footer-area">--}}
    {{--<!-- Top Footer Area -->--}}
    {{--<div class="top-footer-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<!-- Footer Logo -->--}}
                    {{--<div class="footer-logo">--}}
                        {{--//logo--}}
                    {{--</div>--}}
                    {{--<!-- Copywrite -->--}}
                    {{--<p>--}}
                        {{--<a href="#">--}}
                            {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
                            {{--Copyright &copy;--}}
                            {{--<script>--}}
                                {{--document.write(new Date().getFullYear());--}}
                            {{--</script>--}}
                            {{--All rights reserved | This template is made from--}}
                            {{--<i class="fa fa-heart-o" aria-hidden="true"></i>--}}
                            {{--<a href="#" target="_blank">--}}
                                {{--Husein Nurkhonov--}}
                            {{--</a>--}}
                            {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Bottom Footer Area -->--}}
    {{--<div class="bottom-footer-area d-flex justify-content-between align-items-center">--}}
        {{--<!-- Contact Info -->--}}
        {{--<div class="contact-info">--}}
            {{--<a href="#"><span>Phone:</span> +992 935 66 9514</a>--}}
            {{--<a href="#"><span>Email:</span> info@online-test.ehost.tj</a>--}}
        {{--</div>--}}
        {{--<!-- Follow Us -->--}}
        {{--<div class="follow-us">--}}
            {{--<span>Follow us</span>--}}
            {{--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
            {{--<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
            {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
{{--<!-- ##### Footer Area End ##### -->--}}

{{--</body>--}}

{{--</html>--}}
