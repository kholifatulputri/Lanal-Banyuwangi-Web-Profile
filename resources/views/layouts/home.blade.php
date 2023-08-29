<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shrotcut icon" href="{{ url('assets/images/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!-- animation css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
    <link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
    <!-- aos css -->
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
    <title>LANAL BANYUWANGI</title>
</head>

<body>
    <header class="fixed-top header">
        <div class="top-header py-1 header bg-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-start">
                        <div class="main-info-area">
                            <div class="left-section wrap-logo-top">
                                <a href="{{ url('/') }}" class="link-to-home"><img
                                        src="assets/images/logo-top-1.png" alt="medicom" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navbar')

    </header>

    @yield('content')

    @include('layouts.footer')
