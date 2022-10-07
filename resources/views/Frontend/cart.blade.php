@extends('FrontendLayouts.master')
@section('content')
@if (Cookie::get('user') !== null)  
      <!-- BREADCRUMB AREA START -->
      <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Cart</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    <!-- SHOPING CART AREA START -->
    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <!-- <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                <tbody>
                                    @php $total = 0 @endphp
                                    @foreach ($cart as $data)
                                    @php $total += $data->products->offer_price  @endphp
                                    <tr class="cart-product-image" id="cart_item_{{ $data->id }}">
                                        <td data-th="Product" >
                                            <div class="">
                                                <div class="col-sm-3 hidden-xs"><img src="{{$data->products->thumbnail}}" class="img-responsive"/></div>
                                            </div>
                                        </td>
                                        <td class="cart-product-info">
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">{{$data->products->name }}</h4>
                                            </div>
                                        </td>
                                    
                                        <td data-th="Quantity">
                                            <input type="number" value="{{ $data->quantity }}" data-id="{{$data->id}}" class="form-control quantity update_cart_item productQuantity" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center" id="product_item-{{$data->id}}">${{ $data->products->offer_price *  $data->quantity }}
                                         </td>
                                        <td class="actions" data-th="">
                                            <button data-id="{{$data->id}}" class="btn btn-danger btn-sm remove_cart_item_ajax">Remove</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="float: right;" class="text-right" id="cart_item_total"><h3 style="display: inline-block">Total = $ </h3><h3 style="display: inline-block"><strong class="grandTotal">{{ $total }} </strong></h3></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="shoping-cart-total mt-50">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>${{ $total }}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handing</td>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>$00.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong class="grandTotal">${{ $total+15 }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-wrapper text-right">
                                <a href="{{route('checkOut')}}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->
    
@else
  <!-- BREADCRUMB AREA START -->
  <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Cart</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive ">
                            <br><br><br>
                            <table id="cart" class="table table-hover table-condensed">
                                <table class="table">
                                    <thead>
                                        <th class="cart-product-image">Image</th>
                                        <th class="cart-product-info">Product</th>
                                        <th class="cart-product-quantity">Quantity</th>
                                        <th class="cart-product-price">Price</th>
                                        <th class="cart-product-subtotal">Action</th>
                                    </thead> 
                                    <tbody>
                                <tbody>
                                    @php $total = 0 @endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <tr id="cart_item_{{ $id }}" data-id="{{ $id }}" class="cart-product-image">
                                                <td data-th="Product" >
                                                    <div class="">
                                                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}"   class="img-responsive"/></div>
                                                    </div>
                                                </td>
                                                <td class="cart-product-info">
                                                    <div class="col-sm-9">
                                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                    </div>
                                                </td>
                                            
                                                <td data-th="Quantity">
                                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                                                </td>
                                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-danger btn-sm remove-from-cart">Remove</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="float: right;" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                        </td>
                                    </tr>
                                </tfoot>
                                
                            </table>
                        </div>
                        <div class="shoping-cart-total mt-50">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>${{ $total }}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handing</td>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>$00.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>${{ $total+15 }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-wrapper text-right">
                                <a href="{{route('checkOut')}}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
   
@section('script')
<script type="text/javascript">
//login Remove & Delete
    //Remove From Cart
    $(function(){ 
        $('.remove_cart_item_ajax').on("click", function () { 
            var job =  event.target.dataset.id;
            $.ajax({
                url: '{{ route('removeFromCartAjax') }}',
                type: 'DELETE',
                dataType: 'json',
                data: {
                _token : '<?php echo csrf_token() ?>',
                id : job
            },
            success : function(response){

                if(response.status == 1){
                    $('#cart_item_'+job).remove();
                    $('.grandTotal').html(response.total);
                }
            } 
            });
        });
    });
    //Update Cart
    $(function(){ 
        $('.update_cart_item').on("click", function () { 
            var job =  event.target.dataset.id;
            $.ajax({
                url: '{{ route('UpdateCartItemAjax') }}',
                type: 'POST',
                dataType: 'json',
                data: {
                _token : '<?php echo csrf_token() ?>',
                id : job
            },
            success : function(response){

                if(response.status == 1){
                    $('#product_item-'+job).html(response.subtotal);
                    $('.productQuantity').html(response.quantity);
                    $('.grandTotal').html(response.total);
                }
            } 
            });
        });
    });
    //session Remove & Delete
    $(".update-cart").change(function (e) {
        e.preventDefault();
        alert('yes in function');
        var ele = $(this);
        
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    $('#cart_item_'+ele.parents("tr").attr("data-id")).remove();
                }
            });
        }
    });
   
</script>
@endsection