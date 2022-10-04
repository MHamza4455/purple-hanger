<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal_{{$data->id}}" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="{{$data->thumbnail}}" alt="#">
                                    </div>
                                     <div class="modal-product-info">
                                        <h5><a href="product-details.html"></a>{{$data->name}}</h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>  Press Add To Cart to Confirm.</p>
                                        <div class="btn-wrapper">
                                            <a href="{{ route('add.to.cart', $data->id) }}" class="theme-btn-1 btn btn-effect-1">Add To Cart</a>
                                        </div>
                                     </div>
                                     <!-- additional-info -->
                                     <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="img/icons/payment.png" alt="#">
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
</div>
<!-- MODAL AREA END -->