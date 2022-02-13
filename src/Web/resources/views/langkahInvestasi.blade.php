@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 md:text-5xl font-bold text-3xl text-center md:w-2/4 mx-auto w-5/6">
            Langkah Sederhana Investasi di BASAMA
        </div>
    </div>
</div>

<section>
    <div id="daftarLogin">
        <div class="imgLeft">
            <img src="{{ URL::asset('Guest/investasi/daftar dan login.png') }}" alt="">
        </div>
        <div class="descRight">
            <h1>Daftar dan Login di BASAMA</h1> 
            <p>Klik login untuk memulai joint venture di LOGO. Jika belum mempunyai akun bisa mengklik link daftar pada halaman login lalu diarahkan pada halaman daftar.</p>
        </div>
    </div>
</section>

<section>
    <div id="daftarLogin">
        <div class="descLeft">
            <h1>Lengkapi Data Diri di Profile</h1> 
            <p>Lengkapi profile Anda sesuai prosedur agar kami bisa memverifikasi keaslian akun Anda untuk keamanan melakukan joint venture.</p>
        </div>
        <div class="imgRight">
            <img src="{{ URL::asset('Guest/investasi/Group.png') }}" alt="">
        </div>
    </div>
</section>

<section>
    <div id="daftarLogin">
        <div class="imgLeft">
            <img src="{{ URL::asset('Guest/investasi/verifikasi.png') }}" alt="">
        </div>
        <div class="descRight">
            <h1>Tunggu Verifikasi Akun</h1> 
            <p>Tunggu verifikasi akun Anda dari tim kami selama 24-72 jam.</p>
        </div>
    </div>
</section>

<section>
    <div id="daftarLogin">
        <div class="descLeft">
            <h1>Seleksi & Pilih Usaha</h1> 
            <p>Seleksi usaha yang ingin Anda pilih untuk melakukan joint venture melalui deskripsi dan profile usaha. Seleksi dapat dilakukan dengan menfilter di pencarian sesuai jenis usaha yang Anda inginkan.</p>
        </div>
        <div class="imgRight">
            <img src="{{ URL::asset('Guest/investasi/pilih usaha.png') }}" alt="">
        </div>
    </div>
</section>

<section>
    <div id="daftarLogin">
        <div class="imgLeft">
            <img src="{{ URL::asset('Guest/investasi/duduk.png') }}" alt="">
        </div>
        <div class="descRight">
            <h1>Penawaran & Kontrak</h1> 
            <p>Masukan penawaran harga investasi untuk melakukan joint venture dengan pilihan bisnis. Tunggu verifikasi dari pihak bisnis. Pastikan Anda sudah mengetahui kontrak yang berlaku jika melakukan joint venture dengan bisnis tersebut.</p>
        </div>
    </div>
</section>

<section>
    <div id="daftarLogin">
        <div class="descLeft">
            <h1>Persetujuan dan Konfirmasi</h1> 
            <p>Bisnis akan mengonfirmasi joint venture bersama dan mengirimkan konfirmasi joint venture bersama dengan perjanjian kontrak dan pembagian presentase deviden. Anda dapat mengonfirmasi apakah setuju atau tidak.</p>
        </div>
        <div class="imgRight">
            <img src="{{ URL::asset('Guest/investasi/persetujuan.png') }}" alt="">
        </div>
    </div>
</section>

<div style="text-align: center;margin-top:20px;">
    <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">Mulai Joint Venture</a>
</div>
<br>

@endsection