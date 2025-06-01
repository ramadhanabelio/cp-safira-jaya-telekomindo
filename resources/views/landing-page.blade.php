@extends('layouts.user')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="beranda" class="beranda section dark-background">
            <img src="{{ asset('img/hero-bg.jpg') }}" alt="" data-aos="fade-in" />

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">
                    PROTECTION NEVER SLEEP.
                </h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Security System
                </p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#tentang" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="tentang" class="tentang section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('img/about.jpg') }}" class="img-fluid rounded-4 mb-4" alt="" />
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <h3>
                                PT. Safira Jaya Telekomindo
                            </h3>
                            <p>
                                PT. Safira Jaya Telekomindo adalah perusahaan telekomunikasi yang berdiri sejak 1999 dan
                                berlokasi di Pekanbaru. Perusahaan ini menyediakan produk dan layanan seperti PABX, CCTV,
                                Fire
                                Alarm, Alarm Albox dan jaringan data.
                            </p>
                            <p>
                                Perusahaan ini juga melayani penjualan, pemasangan dan service di luar Sumatra. Anda dapat
                                menghubungi hotline kami untuk info lebih lanjut. Kami menjamin kepuasan Anda dengan produk
                                dan
                                layanan kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Product Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Produk</h2>
                <p>Cek Produk Kami</p>
            </div>

            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">SEMUA</li>
                        @foreach ($products->pluck('type')->unique() as $type)
                            <li data-filter=".filter-{{ str_replace(' ', '-', strtolower($type)) }}">
                                {{ $type }}</li>
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
        <!-- /Product Section -->

        <!-- Contact Section -->
        <section id="kontak" class="kontak section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi Kami</p>
                <span>Jika anda ingin memesan / ada pertanyaan, silahkan datangi alamat atau hubungi kontak yang
                    tertera</span>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>
                                        Jl. Pembangunan No.44 H, Sukajadi, Pekanbaru
                                    </p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Nomor HP</h3>
                                    <p>+628127569887</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>sj.telekomindo@yahoo.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('contact') }}" method="POST" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Pesan" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading d-none">Mengirim pesan...</div>
                                    <div class="error-message text-danger d-none"></div>
                                    <div class="sent-message text-success d-none">Pesan berhasil dikirim!</div>

                                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection
