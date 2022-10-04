<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vicodin - Medical eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('Frontend.Scripts.css-scripts')
    @yield('css')
</head>
<body>
<!-- Body main wrapper start -->
<div class="body-wrapper">

    @include('Frontend.includes.navbar')
    @include('Frontend.includes.Home.sidebar')
    @include('Frontend.includes.mobile-menu')
    <div class="ltn__utilize-overlay"></div>
    @yield('content')
    

    @include('Frontend.includes.footer')

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

   @include('Frontend.Scripts.js-scripts')
   @yield('script')
</body>
</html>

