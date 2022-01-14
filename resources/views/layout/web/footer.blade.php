<footer id="footer"
    style="background-image: url({{ asset('public/assets/web/img/footer-bg.svg') }}); background-repeat: no-repeat; background-size: cover;">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <div class="footer-info">
                        <h3>SPMB UNBAJA</h3>
                        <p class="pb-2">
                            <strong>Kampus 1:</strong>
                            <br>
                            <em>Warung pojok doni, Jl. Ciwaru Raya No.73, Cipare,
                                Kec. Serang, Kota
                                Serang, Banten 42117.</em>
                        </p>
                        <p class="pb-3">
                            <strong>Kampus 2:</strong>
                            <br>
                            <em>Jl. Syekh Moh. Nawawi Albantani Kp. Boru Kecamatan
                                Curug, Banjarsari, Cipocok Jaya, Kota Serang, Banten 42123.</em>
                        </p>
                        <p>
                            <strong>Telepon:</strong> (0254) 217066<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/unbaja" target="_blank" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://web.facebook.com/unbaja?_rdc=1&_rdr" target="_blank"
                                class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/universitasbantenjaya/?hl=id" target="_blank"
                                class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCXNSQkkxe2jMmu7zpY2lhSA" target="_blank"
                                class="google-plus"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link Kami</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('fakultas') }}">Fakultas</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('kontak-kami') }}">Kontak Kami</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('tanya-jawab') }}">Tanya Jawab</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Jam Operasional</h4>
                    <ul>
                        <li>
                            <i class="bx bx-time"></i>&nbsp;
                            <span>Senin - Jumat</span>&nbsp;|&nbsp;<span>Pukul 08.00 - 21.00 WIB</span>
                        </li>
                        <li>
                            <i class="bx bx-time"></i>&nbsp;
                            <span>Sabtu</span>&nbsp;|&nbsp;<span>Pukul 08.00 - 14.00 WIB</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Universitas Banten Jaya&nbsp;{{ date('Y') }}
        </div>
    </div>
</footer>
