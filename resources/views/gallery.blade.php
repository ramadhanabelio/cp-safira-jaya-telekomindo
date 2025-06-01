@extends('layouts.user')

@section('content')
    <main class="main">
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h1>Galeri</h1>
                <p>Kumpulan Dokumentasi Kegiatan</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('landing') }}">Beranda</a></li>
                        <li class="current">Galeri</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="portfolio-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-details-slider swiper init-swiper">
                                <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "autoplay": {
                                        "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "type": "bullets",
                                        "clickable": true
                                    }
                                }
                                </script>

                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
