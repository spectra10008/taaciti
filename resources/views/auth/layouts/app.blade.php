<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="App - control panel.">
    <meta name="author" content="PIXINVENT">
    <title>Taciti - تاسيتي</title>
    <link rel="apple-touch-icon" href="{{ asset('/images/taciti-s2.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/taciti-s2.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

    <style>
        a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span {
            font-family: 'Almarai', sans-serif !important;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" style="font-family: 'Almarai', sans-serif;">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
               @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
