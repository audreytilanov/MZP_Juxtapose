@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            Joint Venture dan Investasi UMKM
        </div>
        <div class="text-center pt-3 md:text-base w-5/6 md:w-3/4 mx-auto font-sekunder" style="color: black">
            Solusi bagi Usaha Mikro Kecil Menengah memulai usaha bisnis bersama tanpa ribet di BASAMA
        </div>
        <br>
        <div style="display: flex;justify-content:space-between">
            <div>
                <h1 class="font-other" style="font-weight:bold">Bisnis Terdaftar</h1>
                <h1 class="font-utama" style="font-weight:bold;text-align:center;color:black;">1</h1>
            </div>
            <div>
                <h1 class="font-other" style="font-weight:bold;">Bisnis Mendaftar</h1>
                <h1 class="font-utama" style="font-weight:bold;text-align:center;color:black;">1</h1>
            </div>
            <div>
                <h1 class="font-other" style="font-weight:bold">Member Terdaftar</h1>
                <h1 class="font-utama" style="font-weight:bold;text-align:center;color:black;">1</h1>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <h1 style="font-size: 30px;font-weight:bold;text-decoration: underline;
    text-underline-offset: 10px;text-decoration-thickness: 3px;margin-top:50px;">Periode Sekarang</h1>
    <br>
    <div class="periodeSekarang">
        <div class="row">
            @foreach ( $usaha as $usahas)
            {{-- {{ dd($data) }} --}}
            <div class="card" style="width: 30%;">
                <img src="{{ URL::asset('fotousaha/'.$usahas->foto2) }}" class="card-img-top" alt="...">
                <img style="text-align:center;margin:auto;" width="80px" src="{{ URL::asset('fotousaha/'.$usahas->foto) }}" class="" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-center font-other"><b>{{ $usahas->nama_usaha }}</b></h5>
                    {{-- <p class="card-text text-center text-black font-sekunder">{{ Auth::user()->name }}</p> --}}
                    <p><i class="fa fa-lg fa-share"></i></p>
                    <a href="{{ route('detail.usaha',['id' => $usahas->id]) }}" class="btn btn-success">See more</a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <div style="text-align: center;margin-top:20px;">
        <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">See All</a>
    </div>
</div>
{{-- <div class="container">
    <h1 style="font-size: 30px;font-weight:bold;text-decoration: underline;
    text-underline-offset: 10px;text-decoration-thickness: 3px;margin-top:50px;">Periode Selanjutnya</h1>
    <br>
    <div style="display: flex;justify-content:space-between">
        <div class="card" style="width: 30%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div style="text-align: center;margin-top:20px;">
        <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">See All</a>
    </div>
</div> --}}

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
        <div style="text-align: center;margin-top:20px;">
            <a style="background-color: transparent;border:2px solid #047857;" href="/partner" class="seeAll btn btn-success">Cari Partner</a>
        </div>
    </div>
</section>

<section id="caraInvestasi">
    <div class="container">
        <h1 class="font-utama" style="font-weight:bold;text-decoration: underline;
        text-underline-offset: 3px;text-decoration-thickness: 3px;margin-top:50px;text-align:center;">Bagaimana Cara Investasi di BASAMA</h1>
        <br>
        <div class="gambar font-sekunder" style="display: flex;justify-content:space-between">
            <div>
                <img class="img1" width="150px" src="{{ URL::asset('Guest/a.png') }}" alt="">
                <p>Seleksi & Pilih Usaha</p>
            </div>
            <div>
                <img class="img2" width="160px" src="{{ URL::asset('Guest/b.png') }}" alt="">
                <p>Penawaran & Kontrak</p>
            </div>
            <div>
                <img class="img3" width="180px" src="{{ URL::asset('Guest/c.png') }}" alt="">
                <p>Persetujuan</p>
            </div>
            <div>
                <img class="img4" width="140px" src="{{ URL::asset('Guest/d.png') }}" alt="">
                <p>Pengelolaan &<br>Pembagian Dividen</p>
            </div>
        </div>
        <div style="text-align: center;margin-top:20px;">
            <a style="background-color: transparent;border:2px solid #047857;" href="{{ route('langkah.investasi') }}" class="seeAll btn btn-success">Cari Tahu Lebih Banyak</a>
        </div>
    </div>
</section>

<section id="daftarUsaha">
    <div id="usaha">
        <div class="gambar">
            <img src="{{ URL::asset('Guest/gambar daftar usaha.png') }}" alt="">
        </div>
        <div class="desc">
            DAFTARKAN USAHA ANDA DI BASAMA DAN DAPATKAN BANTUAN MODAL
        </div>
        <div class="smalldesc">
            BASAMA akan membantu mempertemukan Anda dan Bisnis Anda kepada pihak yang ingin bekerjasama dalam kesepakatan untuk tujuan bersama 
        </div>
    </div>
</section>
{{-- kumpulan menu --}}



@endsection
