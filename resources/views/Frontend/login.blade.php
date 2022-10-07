@extends('FrontendLayouts.master')
@section('content')
<!-- LOGIN AREA START -->
<br><br><br><br>
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Sign In <br>To  Your Account</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                         Sit aliquid,  Non distinctio vel iste.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="{{route('checkFrontendUser')}}" method="get" >
                        <input type="text" name="email" placeholder="Email*">
                        <input type="password" name="password" placeholder="Password*">
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="#"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <p>Add items to your wishlistget personalised recommendations <br>
                        check out more quickly track your orders register</p>
                    <div class="btn-wrapper">
                        <a href="register.html" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection
@section('script')
<script>
    @if (session('messageLoginFailed'))
    swal({
    title: "Login Failed!",
    text: "PLEASE TRY AGAIN WITH VALID EMAIL & PASSWORD!",
    timer: 5000
    });
    @endif
</script>
@endsection