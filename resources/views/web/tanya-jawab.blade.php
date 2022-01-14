@extends('layout.web')

@section('title', 'Tanya Jawab')

@section('content')

    <main id="main">
        <section class="breadcrumbs"
            style="background-image: url({{ asset('assets/web/img/breadcrumbs-bg.png') }}); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center text-center">
                        <div data-aos="zoom-out">
                            <h1>Tanya Jawab</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tanya Jawab</h2>
                    <p>Apa yang bisa kami bantu?</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">
                                Apa itu Program SPMB Unbaja?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Program SPMB Unbaja adalah program penerimaan mahasiswa baru yang
                                    ditujukan untuk calon mahasiswa yang ingin melanjutkan pendidikan ke jenjang D3/S1/S2.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
                                Apa sih tujuan SPMB Unbaja?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Program SPMB Unbaja bertujuan untuk memudahkan calon mahasiswa baru yang ingin mendaftar
                                    tanpa harus datang langsung ke lokasi pendaftaran.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
                                Kapan pendaftaran penerimaan mahasiswa baru dibuka?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Pendaftaran mahasiswa baru dimulai pada tanggal 1 januari - 31 oktober
                                    {{ date('Y') }}.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
                                Siapa saja sih yang dapat mendaftar penerimaan mahasiswa baru?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Semua orang yang ingin melanjutkan pendidikan tingkat D3/S1/S2 baik siswa baru lulus
                                    maupun karyawan yang ingin melanjutkan pendidikan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">
                                Berapa biaya pendaftaran mahasiswa baru di Universitas Banten Jaya?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Biaya registrasi sebesar Rp. 300.000,-. Pembayaran dapat dilakukan setelah melakukan
                                    pendaftaran online atau datang langsung ke lokasi pendaftaran mahasiswa baru.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section>

    </main>

@endsection
