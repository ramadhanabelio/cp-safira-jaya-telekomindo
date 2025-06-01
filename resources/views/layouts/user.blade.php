<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PT. Safira Jaya Telekomindo</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Safira Jaya Telekomindo</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @php
                        $routeName = Request::route()->getName();
                        $onLanding = $routeName === 'landing';
                    @endphp

                    <li>
                        <a href="{{ $onLanding ? '#beranda' : route('landing') . '#beranda' }}"
                            class="{{ $onLanding ? 'active' : '' }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ $onLanding ? '#tentang' : route('landing') . '#tentang' }}"
                            class="{{ $onLanding && request()->is('#tentang') ? 'active' : '' }}">Tentang</a>
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
                        <a href="{{ $onLanding ? '#kontak' : route('landing') . '#kontak' }}"
                            class="{{ $onLanding && request()->is('#kontak') ? 'active' : '' }}">Kontak</a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="{{ url('login') }}">Admin Panel</a>
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <span class="sitename">PT. Safira Jaya Telekomindo</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Pembangunan No.44 H, Sukajadi, Pekanbaru</p>
                        <p class="mt-3">
                            <strong>Nomor HP:</strong>
                            <span>+62 812-7569-887</span>
                        </p>
                        <p>
                            <strong>Email:</strong>
                            <span>sj.telekomindo@yahoo.com</span>
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/safirajaya/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@cctvsafira"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Hubungi Saya</h4>
                    <ul>
                        <li>
                            <i class="bi bi-telephone me-2"></i>
                            <a href="#">+62 812-7569-887</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">PT. Safira Jaya Telekomindo</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed by
                <a href="">Fikrotun Najichah</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
