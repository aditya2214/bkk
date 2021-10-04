<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>BKK SMK PGRI 2 KARAWANG</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" style="image/png" href="{{ asset ('bkk.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('frontend/assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset ('frontend/__manifest.json') }}">
    <link href="{{ asset ('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

</head>

<body>
@include('sweetalert::alert')
    <!-- loader -->
    <!-- <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div> -->
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
            <i class="fas fa-user-cog fa-2x"></i>
            </a>
        </div>
        <div class="pageTitle">
           <small> BKK SMK PGRI 2 KARAWANG</small>
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
            <i class="fas fa-search fa-2x"></i>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                <i class="fas fa-search"></i>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">BKK SMK PGRI 2 KARAWANG</h1>
            @if(Auth::user() != null)
            <h4 class="subtitle">Selamat Datang {{Auth::user()->name}} </h4>
            @else
            <h4 class="subtitle">Selamat Datang </h4>
            @endif
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Mode</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                        <label class="custom-control-label" for="darkmodeswitch"></label>
                    </div>

                </div>
            </div>
        </div>

       @yield('content')


        <!-- app footer -->
        <div class="appFooter">
            <div class="float-center">
                <b>Bursa Kerja Khusus</b>
            </div>
            <div class="footer-title">
                Copyright © BKK SMK PGRI 2 KARAWANG 2021. All Rights Reserved.
            </div>

            <!-- <div class="mt-2">
                <a href="javascript:;" class="btn btn-icon btn-sm btn-facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-whatsapp">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div> -->

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
   @include('button_bottom')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    @include('sidebar')
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <!-- <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="{{ asset ('frontend/assets/img/icon/72x72.png') }}" alt="image" class="imaged w24">
                    <strong>BKK SMK PGRI 2 KARAWANG</strong>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Selamat Datang</h3>
                    <div class="text">
                        Ayokk lamar pekerjaan sekarang juga. 
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- * welcome notification -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset ('frontend/assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ asset ('frontend/assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset ('frontend/assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js') }}"></script> -->
    <!-- Owl Carousel -->
    <script src="{{ asset ('frontend/assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ asset ('frontend/assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset ('frontend/assets/js/base.js') }}"></script>


    <!-- <script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script> -->

</body>

</html>