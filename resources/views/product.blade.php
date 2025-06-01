@extends('layouts.user')

@section('content')
    <main class="main">
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('img/page-title-bg.jpg') }});">
            <div class="container position-relative">
                <h1>Produk</h1>
                <p>Kumpulan Produk Terbaik Kami</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('landing') }}">Home</a></li>
                        <li class="current">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section id="portfolio" class="portfolio section">
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">SEMUA</li>
                        @foreach ($products->pluck('type')->unique() as $type)
                            <li data-filter=".filter-{{ str_replace(' ', '-', strtolower($type)) }}">{{ $type }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($products as $product)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ str_replace(' ', '-', strtolower($product->type)) }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid"
                                        alt="{{ $product->name }}" />
                                    <div class="portfolio-info">
                                        <h4>{{ $product->type }}</h4>
                                        <p>{{ $product->name }}</p>
                                        <a href="{{ asset('storage/' . $product->image) }}" title="{{ $product->name }}"
                                            data-gallery="portfolio-gallery-{{ strtolower(str_replace(' ', '-', $product->type)) }}"
                                            class="glightbox preview-link">
                                            <i class="bi bi-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('product.detail', $product->slug) }}" title="More Details"
                                            class="details-link">
                                            <i class="bi bi-link-45deg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
