@extends('layouts.app')

@section('content')
<section class="contact_section layout_padding">
    <div class="contact-us">
        <div class="container">
            <div class="heading_container heading_center mb-5">
                <h2 class="text-center font-rajdhani">
                    HUBUNGI KAMI
                </h2>
            </div>

            <!-- Form Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <form method="POST" action="/contact/send" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="nama">Nama Anda</label>
                            <input type="text" id="nama" placeholder="Masukkan nama lengkap Anda" name="user_name" class="form-control custom-input" required autocomplete="off" />
                        </div>
                        <div class="mb-4">
                            <label for="email">Email Anda</label>
                            <input type="email" id="email" placeholder="Masukkan email aktif Anda" name="email_name" class="form-control custom-input" required autocomplete="off" />
                        </div>
                        <div class="mb-4">
                            <label for="pesan">Pesan Anda</label>
                            <textarea class="form-control custom-input" id="pesan" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required autocomplete="off"></textarea>
                        </div>
                        <div class="recaptcha-container">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                        </div>
                        <div class="d-grid">
                            <!--<button type="submit" class="cta-support">
                                <i class="bi bi-send-fill me-2"></i>
                                Kirim Pesan
                            </button>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection