@extends('FrontendLayouts.master')
@section('content')
   <!-- BREADCRUMB AREA START -->
   <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">What We Do</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('indexHome')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="img/service/11.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">Your faithful partners <br> Medical Goods</h1>
                        <p>Over 39,000 people work for us in more than 70 countries all over the
                            This breadth of global coverage, combined with specialist services</p>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide---">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="btn-wrapper animated">
                        <a href="about.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                    <h1 class="section-title">Our Core Services</h1>
                </div>
            </div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="fas fa-microscope"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Medical Accessories</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-stethoscope"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Covid - 19 Treatment Center</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-hospital"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">24/7 Hours Emergency Care</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-operator"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Online Free Consultations</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-mortarboard"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Qualified Products</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-secure"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Self Protection Kit</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                    <h1 class="section-title">Leatest News Feeds</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->


@endsection