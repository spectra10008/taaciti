<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Taciti">
    <title>لوحة التحكم - @yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('/images/taciti-s2.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/taciti-s2.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/ui/prism.min.css') }}">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- END: Head-->

    <!-- BEGIN: Body-->
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

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns" style="font-family: 'Almarai', sans-serif !important;">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">

                    <ul class="nav navbar-nav float-left ml-auto">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label"
                                href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 جديدة</h3><span class="grey darken-2">إشعارات
                                            التطبيق</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small
                                                    class="notification-text"> Are your going to meet me
                                                    tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-download-cloud font-medium-5 success"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation
                                                </h6><small class="notification-text">Server have 99% CPU
                                                    usage.</small>
                                            </div><small>
                                                <time class="media-meta"
                                                    datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small
                                                    class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small
                                                    class="notification-text">Chocolate cake oat cake tiramisu
                                                    marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    month</time></small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                        href="javascript:void(0)">قراءة كل الاشعارات</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ Auth::user()->name }}</span><span
                                        class="user-status">متوفر</span></div><span><img class="round"
                                        src="{{ asset(Auth::user()->profile_pic) }}" alt="avatar" height="40"
                                        width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="/panel-admin/edit_profile"><i class="feather icon-user"></i> تعديل
                                    البروفايل</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                        class="feather icon-power"></i> تسجيل
                                    الخروج</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/panel-admin/dashboard">
                        <img src="{{ asset('/images/taciti-s2.png') }}" alt="" style="width: 35px">
                        <h2 class="brand-text mb-0">لوحة التحكم</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item  {{ request()->is('panel-admin/dashboard') ? 'active' : '' }}"><a
                        href="/panel-admin/dashboard"><i class="feather icon-home"></i><span class="menu-title"
                            data-i18n="Dashboard">الرئيسية</span></a>
                </li>
                <li class=" navigation-header"><span>القائمة</span>
                </li>
                <li class="nav-item"><a href="#"><i class="fa fa-shopping-cart"></i><span class="menu-title"
                            data-i18n="Starter kit">الطلبات </span></a>
                    <ul class="menu-content">
                        <li><a href="sk-layout-2-columns.html"><i></i><span class="menu-item"
                                    data-i18n="2 columns">الطلبات الجديدة</span></a>
                        </li>
                        <li class=""><a href="sk-layout-fixed-navbar.html"><i></i><span class="menu-item"
                                    data-i18n="Fixed navbar">الطلبات المكتملة</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('admin/users') ? 'active' : '' }}"><a href="/admin/users"><i
                            class="fa fa-file-pdf-o"></i><span class="menu-title" data-i18n="Email">
                            الفواتير</span></a>
                </li>
                <li class="nav-item {{ request()->is('panel-admin/categories') ? 'active' : '' }}"><a href="/panel-admin/categories"><i
                            class="fa fa-list-alt"></i><span class="menu-title" data-i18n="Email">
                            الأقسام</span></a>
                </li>
                <li class="nav-item {{ request()->is('admin/categories') ? 'active' : '' }}"><a href="/admin/categories"><i
                            class="fa fa-cubes"></i><span class="menu-title" data-i18n="Email">
                            المنتجات</span></a>
                </li>

                <li class="nav-item {{ request()->is('admin/users') ? 'active' : '' }}"><a href="/admin/users"><i
                            class="fa fa-gift"></i><span class="menu-title" data-i18n="Email">
                            الكوبونات</span></a>
                </li>
                <li class="nav-item {{ request()->is('panel-admin/offers') ? 'active' : '' }}"><a href="/panel-admin/offers"><i
                            class="fa fa-tags"></i><span class="menu-title" data-i18n="Email">
                            العروض</span></a>
                </li>
                <li class=" navigation-header"><span>الإعدادات</span>
                </li>
                <li class="nav-item {{ request()->is('panel-admin/payment-methods') ? 'active' : '' }}"><a
                        href="/panel-admin/payment-methods"><i class="fa fa-money"></i><span class="menu-title"
                            data-i18n="Email">طرق
                            الدفع</span></a>
                </li>
                <li class="nav-item {{ request()->is('panel-admin/web-configs') ? 'active' : '' }}"><a
                        href="/panel-admin/web-configs"><i class="fa fa-cogs"></i><span class="menu-title"
                            data-i18n="Email">اعدادات
                            النظام</span></a>
                </li>
                <li class="nav-item {{ request()->is('panel-admin/users') ? 'active' : '' }}"><a
                        href="/panel-admin/users"><i class="fa fa-lock"></i><span class="menu-title"
                            data-i18n="Email">مدراء
                            النظام</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">حقوق
                الطبع {{ date('Y') }}<a class="text-bold-800 grey darken-2" href="#"
                    target="_blank">Taaciti,</a>كل الحقوق محفوظة</span><span
                class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                    class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/app-assets/vendors/js/ui/prism.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->
    @yield('scriptjs')
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
