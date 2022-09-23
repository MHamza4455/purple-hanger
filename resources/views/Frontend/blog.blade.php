@extends('FrontendLayouts.master')
@section('content')
  <!-- BREADCRUMB AREA START -->
  <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">News Feeds</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- BLOG AREA START -->
<div class="ltn__blog-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-list-wrap">
                    <!-- Blog Item -->
                    <div class="ltn__blog-item ltn__blog-item-5">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/31.jpg" alt="Image"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#">Real Estate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Lorem Ipsum has been the industry's
                                standard dummy text ever since</a></h3>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><img src="img/blog/author.jpg" alt="#">By: Ethan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html"><i class="fas fa-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item (Video) -->
                    <div class="ltn__blog-item ltn__blog-item-5 ltn__blog-item-video">
                        <div class="ltn__video-img">
                            <img src="img/blog/32.jpg" alt="video popup bg image">
                            <a class="ltn__video-icon-2 ltn__secondary-bg ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0"  data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.</a></h3>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><img src="img/blog/author.jpg" alt="#">By: Ethan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html"><i class="fas fa-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item (Gallery) -->
                    <div class="ltn__blog-item ltn__blog-item-5 ltn__blog-item-gallery">
                        <div class="ltn__blog-gallery-active slick-arrow-1 slick-arrow-1-inner">
                            <div class="ltn__blog-gallery-item">
                                <a href="blog-details.html"><img src="img/blog/33.jpg" alt="Image"></a>
                            </div>
                            <div class="ltn__blog-gallery-item">
                                <a href="blog-details.html"><img src="img/blog/34.jpg" alt="Image"></a>
                            </div>
                            <div class="ltn__blog-gallery-item">
                                <a href="blog-details.html"><img src="img/blog/31.jpg" alt="Image"></a>
                            </div>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Magna aliqua. Ut enim ad minim venia
                                m, quis nostrud exercitation ullamco</a></h3>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><img src="img/blog/author.jpg" alt="#">By: Ethan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html"><i class="fas fa-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item (Audio) -->
                    <div class="ltn__blog-item ltn__blog-item-5 ltn__blog-item-audio">
                        <div class="post-audio embed-responsive embed-responsive-16by9">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/837045328&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                            
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor.</a></h3>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><img src="img/blog/author.jpg" alt="#">By: Ethan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html"><i class="fas fa-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item (No Image) -->
                    <div class="ltn__blog-item ltn__blog-item-5 ltn__blog-item-no-image">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">In reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</a></h3>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><img src="img/blog/author.jpg" alt="#">By: Ethan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html"><i class="fas fa-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item (Quote) -->
                    <div class="ltn__blog-item ltn__blog-item-5 ltn__blog-item-quote bg-image bg-overlay-theme-90" data-bs-bg="img/blog/3.jpg">
                        <div class="ltn__blog-brief">
                            <blockquote>
                                <a href="blog-details.html">Excepteur sint occaecat cupida
                                    tat non proident, sunt in.</a>
                            </blockquote>
                            <div class="ltn__blog-meta mb-0">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item (Background Image) -->
                    <div class="ltn__blog-item ltn__blog-item-5 ltn__blog-item-bg-image bg-image bg-overlay-white-90" data-bs-bg="img/blog/2.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Culpa qui officia deserunt mollit anim
                                id est laborum. Sed ut perspiciatis</a></h3>
                            <div class="ltn__blog-meta mb-0">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-eye"></i>232 Views</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>June 22, 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__pagination-area text-center">
                            <div class="ltn__pagination">
                                <ul>
                                    <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                    <!-- Author Widget -->
                    <div class="widget ltn__author-widget">
                        <div class="ltn__author-widget-inner text-center">
                            <img src="img/team/4.jpg" alt="Image">
                            <h5>Rosalina D. Willaimson</h5>
                            <small>Traveller/Photographer</small>
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                    <li class="review-total"> <a href="#"> ( 1 Reviews )</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio, odio, eligendi suscipit reprehenderit atque.</p>
                            <div class="ltn__social-media">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Form Widget -->
                    <div class="widget ltn__form-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Drop Messege For Book</h4>
                        <form action="#">
                            <input type="text" name="yourname" placeholder="Your Name*">
                            <input type="text" name="youremail" placeholder="Your e-Mail*">
                            <textarea name="yourmessage" placeholder="Write Message..."></textarea>
                            <button type="submit" class="btn theme-btn-1">Send Messege</button>
                        </form>
                    </div>
                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Rated Product</h4>
                        <ul>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.html">Luxury House In Greenville </a></h6>
                                        <div class="product-price">
                                            <span>$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.html">Apartment with Subunits</a></h6>
                                        <div class="product-price">
                                            <span>$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.html">3 Rooms Manhattan</a></h6>
                                        <div class="product-price">
                                            <span>$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu Widget (Category) -->
                    <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Categories</h4>
                        <ul>
                            <li><a href="#">Apartments <span>(26)</span></a></li>
                            <li><a href="#">Picture Stodio <span>(30)</span></a></li>
                            <li><a href="#">Office  <span>(71)</span></a></li>
                            <li><a href="#">Luxary Vilas <span>(56)</span></a></li>
                            <li><a href="#">Duplex House <span>(60)</span></a></li>
                        </ul>
                    </div>
                    <!-- Popular Post Widget -->
                    <div class="widget ltn__popular-post-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>
                        <ul>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><img src="img/team/5.jpg" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="blog-details.html">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><img src="img/team/6.jpg" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="blog-details.html">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><img src="img/team/7.jpg" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="blog-details.html">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><img src="img/team/8.jpg" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="blog-details.html">Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Popular Post Widget (Twitter Post) -->
                    <div class="widget ltn__popular-post-widget ltn__twitter-post-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Twitter Feeds</h4>
                        <ul>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <p>Carsafe - #Gutenberg ready 
                                            @wordpress
                                             Theme for Car Service, Auto Parts, Car Dealer available on 
                                            @website
                                            <a href="https://website.net">https://website.net</a></p>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <p>Carsafe - #Gutenberg ready 
                                            @wordpress
                                             Theme for Car Service, Auto Parts, Car Dealer available on 
                                            @website
                                            <a href="https://website.net">https://website.net</a></p>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="blog-details.html"><i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <p>Carsafe - #Gutenberg ready 
                                            @wordpress
                                             Theme for Car Service, Auto Parts, Car Dealer available on 
                                            @website
                                            <a href="https://website.net">https://website.net</a></p>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Social Media Widget -->
                    <div class="widget ltn__social-media-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                        <div class="ltn__social-media-2">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Tagcloud Widget -->
                    <div class="widget ltn__tagcloud-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Tags</h4>
                        <ul>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">desgin</a></li>
                            <li><a href="#">ux</a></li>
                            <li><a href="#">usability</a></li>
                            <li><a href="#">develop</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Car</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Repairs</a></li>
                            <li><a href="#">Auto Parts</a></li>
                            <li><a href="#">Oil</a></li>
                            <li><a href="#">Dealer</a></li>
                            <li><a href="#">Oil Change</a></li>
                            <li><a href="#">Body Color</a></li>
                        </ul>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
                    </div>
                    <!-- Instagram Widget -->
                    <div class="widget ltn__instagram-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Instagram Feeds</h4>
                        <div class="ltn__instafeed ltn__instafeed-grid insta-grid-gutter"></div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- BLOG AREA END -->
@endsection