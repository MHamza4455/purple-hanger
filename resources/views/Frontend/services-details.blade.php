@extends('FrontendLayouts.master')
@section('content')
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Service Details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('indexHome')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Property Management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PAGE DETAILS AREA START (service-details) -->
<div class="ltn__page-details-area ltn__service-details-area mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__page-details-inner ltn__service-details-inner">
                    <div class="ltn__blog-img">
                        <img src="img/service/21.jpg" alt="Image">
                    </div>
                    <p> <span class="ltn__first-letter">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="img/service/31.jpg" alt="image">
                            <label>Image caption here.</label>
                        </div>
                        <div class="col-lg-6">
                            <img src="img/service/32.jpg" alt="image">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <div class="ltn__service-list-menu text-uppercase mt-50 d-none">
                        <ul>
                            <li><i class="fas fa-car"></i> Front Brakes Repair <span class="service-price">$225.95 <span>Plus Parts</span></span> </li>
                            <li><i class="fas fa-life-ring"></i> Rear Brakes Repair <span class="service-price">$225.95 <span>Plus Parts</span></span> </li>
                            <li><i class="fas fa-cog"></i> Axle <span class="service-price">$225.95 <span>Plus Parts</span></span> </li>
                            <li><i class="fas fa-car"></i> Starters / Alternators <span class="service-price">$225.95 <span>Plus Parts</span></span> </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Menu Widget -->
                    <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                        <ul>
                            <li><a href="#">Medical Accessories <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li class="active"><a href="#">Covid - 19 Treatment Center <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">24/7 Hours Emergency Care <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Online Free Consultations <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Qualified Products <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Self Protection Kit <span><i class="fas fa-arrow-right"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">                            
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="img/banner/banner-1.jpg" alt="Banner Image"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->

@endsection