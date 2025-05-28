@extends('layout.app')
@section('content')

<!-- Halaman Tentang Kami -->
<div class="page-inner">
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="Tentang Kami" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Cantik Alami, Perawatan Terbaik</span>
                                <span class="section-heading-lower">Tentang Layanan Kami</span>
                            </h2>
                            <p>Didirikan pada tahun 2010, salon kecantikan kami berkomitmen untuk memberikan pelayanan perawatan terbaik dengan bahan-bahan alami berkualitas tinggi. Kami menghadirkan suasana yang nyaman dan profesional untuk memastikan setiap pelanggan mendapatkan pengalaman perawatan yang menyenangkan dan memuaskan.</p>
                            <p class="mb-0">
                                Kami percaya bahwa setiap individu berhak tampil menawan. Nikmati layanan kami mulai dari perawatan wajah, rambut, hingga tubuh dengan sentuhan profesional dari tenaga ahli kecantikan kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Intro -->
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="Perawatan" />
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Perawatan Profesional</span>
                        <span class="section-heading-lower">Untuk Anda</span>
                    </h2>
                    <p class="mb-3">Setiap sesi perawatan dirancang khusus sesuai kebutuhan kulit dan rambut Anda. Kami menggunakan produk premium yang telah teruji klinis, aman, dan efektif dalam memberikan hasil yang optimal.</p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="/login">Login / Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jam Operasional -->
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">Kami Siap Melayani</span>
                            <span class="section-heading-lower">Jam Operasional</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Minggu
                                <span class="ms-auto">Tutup</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Senin
                                <span class="ms-auto">09.00 - 19.00</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Selasa
                                <span class="ms-auto">09.00 - 19.00</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Rabu
                                <span class="ms-auto">09.00 - 19.00</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Kamis
                                <span class="ms-auto">09.00 - 19.00</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Jumat
                                <span class="ms-auto">09.00 - 19.00</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Sabtu
                                <span class="ms-auto">10.00 - 17.00</span>
                            </li>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong>Jl. Anggrek No. 23</strong><br />
                                Jakarta Selatan, Indonesia
                            </em>
                        </p>
                        <p class="mb-0">
                            <small><em>Hubungi Kami</em></small><br />
                            (021) 1234-5678
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="intro-button mx-auto">
        <a class="btn btn-primary " href="/login_admin">Login Admin</a>
    </div>
</div>

@endsection
