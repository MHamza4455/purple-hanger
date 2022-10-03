<div class="ltn__modal-area ltn__quick-view-modal-area">
     
    <div class="modal fade" id="quick_view_modal_{{$data->id}}" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                   
                                    <div class="modal-product-img">
                                        <img class="prd-image" src="{{$data->thumbnail}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">{{$data->name}}</a></h3>
                                        <div class="product-price">
                                            <span>{{$data->offer_price}}</span>
                                            <del>{{$data->price}}</del>
                                        </div>
                                        <hr>
                                        <div class="modal-product-brief">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 d-none">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong> 
                                                    <span>
                                                        <a href="#">Parts</a>
                                                        <a href="#">Car</a>
                                                        <a href="#">Seat</a>
                                                        <a href="#">Cover</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2 d-none">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <hr> -->
                                        <div class="ltn__product-details-menu-3">
                                            <ul>
                                                <li>
                                                    <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                        <i class="fas fa-exchange-alt"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <label class="float-end mb-0"><a class="text-decoration" href="product-details.html"><small>View Details</small></a></label>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>