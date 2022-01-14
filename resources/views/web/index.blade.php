@extends('layout.web')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero"
        style="background: url({{ asset('public/assets/web/img/hero-bg.svg') }}); background-repeat: no-repeat; background-size: cover;">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1><span>Penerimaan Mahasiswa</span>&nbsp;Baru</h1>
                        <h2>UNIVERSITAS BANTEN JAYA</h2>
                        <p>Kamu ingin lebih kompeten? Mau mengembangkan diri tapi pusing dimana?
                            Capai tujuanmu bersama Kami</p>
                        <div class="text-center text-lg-start">
                            <a href="{{ route('daftar') }}" class="btn-get-started scrollto">
                                <strong>Daftar Sekarang</strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pt-5 pt-lg-0 col-lg-5 order-2 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('') }}public/assets/web/img/hero-1.png" class="img-fluid mx-auto d-block"
                        alt="hero">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Tentang Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 icon-boxes" data-aos="fade-right">
                        <h3>Tentang SPMB Unbaja</h3>
                        <p style="color: #142B72;">Program SPMB Unbaja adalah program penerimaan mahasiswa baru yang
                            bertujuan untuk memudahkan para
                            calon mahasiswa baru dalam mendaftar dimanapun dan kapanpun. Siapapun dapat mendaftar penerimaan
                            mahasiswa baru baik siswa yang baru lulus maupun karyawan yang ingin melanjutkan pendidikan.</p>
                        <img src="{{ asset('public/assets/web/img/about.png') }}" alt="logo-about"
                            class="img-fluid mx-auto d-block w-75 mb-0">

                    </div>
                    <div class="col-xl-6 col-lg-6 icon-boxes" data-aos="fade-left"
                        style="background: #f8f8f8; border-radius: 25px 25px; border: none;">
                        <div class="py-5 px-4">
                            <h5
                                style="border-bottom: 3px solid #4F8FDA; color:#142B72; font-weight:bold; margin-bottom: 20px; display: inline-block; padding-bottom: 3px;">
                                Syarat Mendaftar
                            </h5>
                            <ul>
                                <li>Memiliki Email Pribadi</li>
                                <li>Memiliki Kartu Tanda Penduduk (Kartu Identitas)</li>
                                <li>Memiliki Ijazah Terakhir</li>
                                <li>Memiliki Transkrip Nilai</li>
                                <li>Memiliki Akta Kelahiran</li>
                                <li>Pas Foto</li>
                            </ul>
                            <a href="{{ route('daftar') }}" class="btn-register mt-3"><strong>Daftar
                                    Sekarang</strong></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Tentang Section -->

        <section id="tutor" class="tutor">
            <div class="container">
                <div class="row"
                    style="background: url({{ asset('') }}public/assets/web/img/tutor.png); background-repeat: no-repeat; background-size: cover; border-radius: 50px;">
                    <div class="col-md-6 text-center p-4" data-aos="fade-right">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="gallery-item">
                                        <a href="{{ asset('') }}public/assets/web/img/info-1.jpg"
                                            class="gallery-lightbox">
                                            <img src="{{ asset('') }}public/assets/web/img/info-1.jpg"
                                                class="d-block mx-auto w-75" alt="carousel" style="border-radius: 20px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="gallery-item">
                                        <a href="{{ asset('') }}public/assets/web/img/info-2.jpg"
                                            class="gallery-lightbox">
                                            <img src="{{ asset('') }}public/assets/web/img/info-2.jpg"
                                                class="d-block mx-auto w-75" alt="carousel" style="border-radius: 20px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="gallery-item">
                                        <a href="{{ asset('') }}public/assets/web/img/info-3.jpg"
                                            class="gallery-lightbox">
                                            <img src="{{ asset('') }}public/assets/web/img/info-3.jpg"
                                                class="d-block mx-auto w-75" alt="carousel" style="border-radius: 20px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center p-4" data-aos="fade-left">
                        <div class="ratio ratio-4x3">
                            <iframe src="https://www.youtube.com/embed/c_u5KHty3qM" title="YouTube video" allowfullscreen
                                style="border-radius: 20px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Langkah Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="section-title mb-3" data-aos="fade-up">
                    <p>Langkah Mudah Pendaftaran</p>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">1</span>
                            <span>Daftar Akun</span>
                            <p>
                                <a href="{{ route('daftar') }}">Daftar</a>&nbsp;dengan data diri kamu. Siapkan email
                                dan Nomor Telepon yang aktif untuk mendaftar.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">2</span>
                            <span>Pilih Jalur Pendaftaran</span>
                            <p>Pilih Jalur Pendaftaran & Fakultas/Program Studi yang diminati.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">3</span>
                            <span>Lengkapi Persyaratan</span>
                            <p>Mengisi formulir pendaftaran dan persyaratan sesuai jalur yang diminati.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">4</span>
                            <span>Cetak Bukti Pendaftaran</span>
                            <p>Mencetak bukti pendaftaran yang telah dilengkapi sebelumnya.</p>
                        </div>
                    </div>

                    <div class="col-lg col-md mb-5 d-flex align-items-stretch">
                        <div class="count-box" style="background-color: #BAD3EB;">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 style="color: #142B72"><strong>Tunggu apa lagi?</strong></h3>
                                    <p class="mb-3">Bersama UNBAJA, raih masa depan yang lebih cerah.</p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('') }}public/assets/web/img/hero-1.png" alt="logo"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Langkah Section -->

    </main>
    <!-- End #main -->

@endsection
