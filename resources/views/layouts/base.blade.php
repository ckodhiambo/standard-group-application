<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Standard Group Interview</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing-page-assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landing-page-assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing-page-assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page-assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing-page-assets/css/style.css') }}" rel="stylesheet">
    <style>
        .l-bg-cherry {
            background: linear-gradient(to right, #0d47a1, #8d188e) !important;
            color: #fff;
        }
        .lg-bg-nabo {

            background: linear-gradient(to right, #142c3c, #6acfeb) !important;
            color: #fff;
        }

        .lg-bg-admi {

            background: linear-gradient(to right, #ed6a21, #b82e36) !important;
            color: #fff;
        }

    </style>
    @livewireStyles
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('landing-page-assets/img/logo.png') }}" alt="">
            <span>Standard Group Interview</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="https://www.linkedin.com/in/kennedy-calvins-104011155/" target="_blank">Contact</a></li>
                @if(Route::has('login'))
                    @auth
                        @if(Auth::user()->user_type==='Administrator')
                            <li class="dropdown"><a href="{{ route('admin.dashboard') }}"><span>{{ auth()->user()->name }}</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('admin.dashboard') }}">My Dashboard</a></li>
                                    <li><a href="#"><a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                                Out</a></a></li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown"><a href="{{ route('admin.dashboard') }}"><span>{{ auth()->user()->name }}</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('admin.dashboard') }}">My Dashboard</a></li>
                                    <li><a href="#"><a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                                Out</a></a></li>
                                </ul>
                            </li>
                        @endif
                        <form id="logout-form" method="post" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    @else
                        <li><a class="getstarted scrollto lg-bg-nabo" href="{{route('login')}}">Sign In</a></li>
                    @endif
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- Used for rendering livewire component -->
{{$slot}}




<!-- Vendor JS Files -->
<script src="{{ asset('landing-page-assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('landing-page-assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landing-page-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing-page-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landing-page-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('landing-page-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('landing-page-assets/vendor/php-email-form/validate.js') }}w"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landing-page-assets/js/main.js') }}"></script>
@livewireScripts
</body>

</html>
