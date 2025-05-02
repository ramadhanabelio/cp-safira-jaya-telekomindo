<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PT. Safira Jaya Telekomindo</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Favicons -->
    <link href="{{ asset('user/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('user/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('user/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('user/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Safira Jaya Telekomindo</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @php
                        $routeName = Request::route()->getName();
                        $onLanding = $routeName === 'landing';
                    @endphp

                    <li>
                        <a href="{{ $onLanding ? '#hero' : route('landing') . '#hero' }}"
                            class="{{ $onLanding ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ $onLanding ? '#about' : route('landing') . '#about' }}"
                            class="{{ $onLanding && request()->is('#about') ? 'active' : '' }}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                            class="{{ $routeName === 'gallery' ? 'active' : '' }}">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ route('product') }}"
                            class="{{ $routeName === 'product' ? 'active' : '' }}">Produk</a>
                    </li>
                    <li>
                        <a href="{{ $onLanding ? '#contact' : route('landing') . '#contact' }}"
                            class="{{ $onLanding && request()->is('#contact') ? 'active' : '' }}">Kontak</a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="{{ url('login') }}">Admin Panel</a>
        </div>
    </header>

    @yield('content')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('user/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>
