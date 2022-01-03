@extends('layout.web')

@section('title', 'Kontak Kami')

@section('content')

    <main id="main">
        <section class="breadcrumbs"
            style="background-image: url({{ asset('assets/web/img/breadcrumbs-bg.png') }}); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center text-center">
                        <div data-aos="zoom-out">
                            <h1>Kontak Kami</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                    <p>Kampus 1</p>
                </div>

                <div class="row contact-bg">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat:</h4>
                                <p>Warung pojok doni, Jl. Ciwaru Raya No.73, Cipare,
                                    Kec. Serang, Kota Serang, Banten 42117.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>(0254) 217066</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7934.003649237374!2d106.16150998222784!3d-6.130455233576875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f531f58c2ded%3A0xaace864e8bf3a811!2sUniversitas%20Banten%20Jaya!5e0!3m2!1sen!2sid!4v1640748034432!5m2!1sen!2sid"
                            class="img-fluid w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                    <p>Kampus 2</p>
                </div>

                <div class="row contact-bg">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat:</h4>
                                <p>Jl. Syekh Moh. Nawawi Albantani Kp. Boru Kecamatan
                                    Curug, Banjarsari, Cipocok Jaya, Kota Serang, Banten 42123.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>(0254) 217066</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7074589874805!2d106.17447071419306!3d-6.169912362180315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e421fe939075aeb%3A0x2a128967381f2908!2sUniversitas%20Banten%20Jaya%202!5e0!3m2!1sid!2sid!4v1640748331410!5m2!1sid!2sid"
                            class="img-fluid w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
