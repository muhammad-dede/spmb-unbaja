@extends('layout.web')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero"
        style="background: url({{ asset('public/assets/web/img/hero-bg.svg') }}); background-repeat: no-repeat; background-size: cover;">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>SPMB <span>UNBAJA</span></h1>
                        <h2>Penerimaan Mahasiswa Baru Universitas Banten Jaya</h2>
                        <p>Kamu ingin lebih kompeten? Mau mengembangkan diri tapi pusing dimana?
                            Capai tujuanmu bersama Kami</p>
                        <div class="text-center text-lg-start">
                            <a href="{{ route('daftar') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('') }}public/assets/web/img/hero-couple.png" class="img-fluid w-100" alt="hero">
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

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 icon-boxes pb-5" data-aos="fade-right">
                        <h3>Tentang SPMB Unbaja</h3>
                        <p style="color: #142B72;">Program SPMB Unbaja adalah program penerimaan mahasiswa baru yang
                            bertujuan untuk memudahkan para
                            calon mahasiswa baru dalam mendaftar dimanapun dan kapanpun. Siapapun dapat mendaftar penerimaan
                            mahasiswa baru baik siswa yang baru lulus maupun karyawan yang ingin melanjutkan pendidikan.</p>
                        <img src="{{ asset('public/assets/web/img/tentang.svg') }}" alt=""
                            class="img-fluid justify-content-center w-100">

                    </div>
                    <div class="col-xl-6 col-lg-6 icon-boxes pb-5" data-aos="fade-left">
                        <div class="card" style="background: #f8f8f8; border-radius: 25px 25px; border: none;">
                            <div class="card-body py-5 px-5">
                                <h5
                                    style="border-bottom: 3px solid #4F8FDA; color:#142B72; font-weight:bold; margin-bottom: 20px; display: inline-block; padding-bottom: 3px;">
                                    Syarat
                                    Mendaftar</h5>
                                <ul>
                                    <li>Memiliki Email Pribadi</li>
                                    <li>Memiliki Kartu Tanda Penduduk (Kartu Identitas)</li>
                                    <li>Memiliki Ijazah Terakhir</li>
                                    <li>Memiliki Transkrip Nilai</li>
                                    <li>Memiliki Akta Kelahiran</li>
                                    <li>Pas Foto</li>
                                </ul>
                                <a href="{{ route('daftar') }}" class="btn-register mt-3">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="section-title mb-3" data-aos="fade-up">
                    <p>Langkah Mudah SPMB Unbaja</p>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">1</span>
                            <span>Daftar</span>
                            <p>
                                <a href="{{ route('daftar') }}">Daftar</a>&nbsp;dengan data diri kamu. Siapkan email,
                                NIK, Nomor Telepon yang aktif untuk mendaftar.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">2</span>
                            <span>Pilih Pendaftaran</span>
                            <p>Pilih Jalur Pendaftaran & Fakultas/Program Studi yang diminati</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">3</span>
                            <span>Lengkapi Persyaratan</span>
                            <p>Mengisi data sesuai pilihan yang diminati sebelumnya dan mengisi formulir persyaratan</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">4</span>
                            <span>Ikuti Test Potensi Akademik</span>
                            <p>Selesaikan test potensi akademik sesuai pilihan jalur pendaftaran</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">5</span>
                            <span>Cetak Pendaftaran</span>
                            <p>Mencetak formulir pendaftaran jika lulus Test Potensi Akademik</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
                        <div class="count-box">
                            <span class="number">6</span>
                            <span>Validasi Data & Pembayaran</span>
                            <p>Validasi data & melakukan pembayaran registrasi sebesar Rp. 300.000,-</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

    </main>
    <!-- End #main -->

@endsection
