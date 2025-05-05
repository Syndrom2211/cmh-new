@extends('layouts.app')

@section('title', 'CreativeMusicHub - Buat Musik dengan Lirik')

@section('content')
<div class="produk-lirik">
    <div class="lirik-hero">
        <div class="lirik-container">
            <div class="lirik-content">
                <h1 class="lirik-title">
                    "Ekspresikan Perasaanmu Lewat <span class="lirik-highlight">Lirik</span> dan <span class="lirik-highlight">Musik</span> Buatanmu" <span class="lirik-icon">🎶</span>
                </h1>

                <p class="lirik-text">
                    "Dengar suara hujan, lihat matahari terbit, rasakan detak jantungmu. Setiap lagu besar dimulai dari satu kata sederhana. Tulis apa yang kamu rasakan. Musik ada di mana-mana."
                </p>


                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282295603115&text=Izin%20Bertanya%20terkait%20Produk%20Pembuatan%20Musik%20dengan%20Lyric&type=phone_number&app_absent=0"><button class="lirik-btn">Tanyakan Produk Lebih Lanjut</button></a>

            </div>
        </div>
    </div>


        <x-product-desc
            title="Buat Musik dari Lirik"
            description1="Dengan CMH.AI, kamu hanya perlu mengunggah lirik untuk mendapatkan musik yang sesuai dengan tema dan mood yang kamu inginkan."
            description2="Tidak perlu repot belajar produksi musik atau mencari musisi. Nikmati berbagai pilihan genre dan aransemen yang disesuaikan dengan lirikmu, apakah untuk video, podcast, atau proyek pribadi."
            description3="Mulai dari Rp. 150.000, CMH.AI menawarkan solusi cepat dan mudah untuk menghasilkan musik berkualitas tinggi. Pilih genre yang diinginkan, unggah lirik, dan biarkan AI kami bekerja. Dalam waktu singkat, kamu akan memiliki musik yang sempurna untuk melengkapi karya kreatifmu."
            image="img/desc1.jpg"
            imageAlt="Gambar Produk Lirik"
        />

        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                    <x-how-it-works :steps="[
                        ['text' => app()->getLocale() === 'id' ? 'Tulis lirik Anda.' : 'Write your lyrics.', 'image' => asset('img/step1.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Pilih genre untuk lagu Anda.' : 'Choose the genre for your song.', 'image' => asset('img/step2.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Kami akan memproses lirik dan membuat musiknya.' : 'We will process the lyrics and create music.', 'image' => asset('img/step3.png')],
                        ['text' => app()->getLocale() === 'id' ? 'Cek musik yang sudah kami buat dan kirim ke E-Mail atau Contact Whatsapp Anda!' : 'Check out the songs we have created and send them to your E-Mail or Whatsapp Contact!', 'image' => asset('img/step4.png')]
                    ]" />
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-price-list-product :products="[
                        [
                            'id' => 1,
                            'name' => 'Buat Musik dari Lirik',
                            'description' => 'Ubah lirikmu menjadi lagu yang indah.',
                            'cta' => 'Pesan Sekarang',
                            'rating' => 'Telah dipesan sebanyak: ',
                            'currency' => 'Rp',
                            'price' => 45000,
                            'features' => ['Revisi Tidak Terbatas', 'Jenis file WAV & MP3', 'Durasi maksimal. 5 menit'],
                            'category' => 'lyric',
                        ]
                    ]" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script>
    document.querySelector('.create-btn').addEventListener('click', function() {
        var targetElement = document.querySelector('.price-list-container');
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
@endpush
