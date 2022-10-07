<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vicodin</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('Frontend.Scripts.js-scripts')
    @include('Frontend.Scripts.css-scripts')
    @yield('css')
</head>

<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">    
    
    @include('Frontend.includes.Home.navbar')
    @include('Frontend.includes.Home.sidebar')
    <div class="ltn__utilize-overlay"></div>
    @include('Frontend.includes.Home.slider')
    @yield('content')
</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
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

