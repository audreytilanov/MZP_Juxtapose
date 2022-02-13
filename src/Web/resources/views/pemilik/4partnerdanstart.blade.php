@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            Fitur Basama
        </div>
        <div class="text-center pt-3 md:text-base w-5/6 md:w-3/4 mx-auto font-sekunder" style="color: black">
            <span style="color: red;font-weight:800;">Note :</span> Fitur Find Partner hanya bisa diakses ketika pemilik usaha belum memulai pra penawaran saham usaha
        </div>
    </div>
</div>

<div style="text-align: center;margin-top:20px;">
    <a style="background-color: transparent;border:2px solid #047857;pointer-events:none;" href="" class="seeAll btn btn-success">Tunggu proses konfirmasi data profil Anda untuk menggunakan fitur BASAMA!</a>
</div>

<section id="partnerBisnis">
    <div id="partner">
        <div class="gambar">
            <img src="{{ URL::asset('Guest/partner.png') }}" alt="">
        </div>
        <div class="desc font-jumbo">
            TEMUKAN PARTNER BISNIS ANDA DI BASAMA DENGAN MUDAH
        </div>
        <div class="smalldesc font-kecil">
            BASAMA akan membantu mempertemukan Anda dengan partner bisnis ideal Anda tanpa ribet
        </div>
        <div style="text-align: left;margin-top:20px;">
            <a style="background-color: transparent;border:2px solid #047857;" href="{{ route('fase.4.partner') }}" class="seeAll btn btn-success">FIND PARTNER</a>
        </div>
    </div>
</section>

<section id="partnerBisnis">
    <div id="partner">
        <div class="gambar">
            <img src="{{ URL::asset('Guest/gambar daftar usaha.png') }}" alt="">
        </div>
        <div class="desc font-jumbo">
            SAATNYA MULAI PENAWARAN SAHAM USAHA ANDA
        </div>
        <div class="smalldesc font-kecil">
            BASAMA akan membantu mempertemukan Anda dan Bisnis Anda kepada pihak yang ingin bekerjasama dalam kesepakatan untuk tujuan bersama 
        </div>
        <div style="text-align: left;margin-top:20px;">
            <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">START PRA PENAWARAN SAHAM</a>
        </div>
    </div>
</section>
@endsection