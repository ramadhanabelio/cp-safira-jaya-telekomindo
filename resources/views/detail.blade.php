@extends('layouts.user')

@section('content')
    <main class="main">
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->type }}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('landing') }}">Beranda</a></li>
                        <li class="current">{{ $product->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section id="portfolio-details" class="portfolio-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-8">
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
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                            <h2>{{ $product->name }}</h2>

                            @php
                                $lines = preg_split('/\r\n|\r|\n/', $product->desc);
                                $isList = count($lines) > 1 && collect($lines)->every(fn($line) => strlen($line) < 100);
                            @endphp

                            @if ($isList)
                                <ul>
                                    @foreach ($lines as $line)
                                        <li>{{ $line }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>{{ $product->desc }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="https://wa.me/628127569887" class="whatsapp-float" target="_blank" title="Hubungi via WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>
@endsection
