@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 md:text-5xl font-bold text-3xl text-center md:w-2/4 mx-auto">
            {{ $usaha->nama_usaha }}
        </div>
        <div class="text-center pt-3 md:text-base text-[10px] w-5/6 md:w-3/4 mx-auto" style="color: black">
            {{ $usaha->alamat_usaha }}
        </div>
        <br>
        <div style="text-align: center;margin-top:20px;">
            <a style="background-color: transparent;border:2px solid #047857;" href="{{ URL::asset('prospektus/'.$data->file_prospektus) }}" class="seeAll btn btn-success">Unduh Prospektus</a>
        </div>
        <div class="text-center pt-3 md:text-base text-[10px] w-5/6 md:w-3/4 mx-auto" style="color: black">
            {{ $usaha->desc_usaha }}
        </div>
    </div>
</div>

<section>
    <div id="periode" class="container">
        <div class="p1">
            <h1><u>Pra Penawaran Saham</u></h1>
        </div>
        <div class="p2">
            <h1 style="color: #979797!important">Penawaran Saham</h1>
        </div>
        <div class="p3">
            <h1 style="color: #979797!important">Pendanaan Terpenuhi</h1>
        </div>
        <div class="p4">
            <h1 style="color: #979797!important">Penyerahan Dana</h1>
        </div>
        <div class="p5">
            <h1 style="color: #979797!important">Pembagian Deviden</h1>
        </div>  
    </div>
</section>

<section>
    <div class="container fotoPemilik">
        <img width="300px" src="{{ URL::asset('Usaha/pemilikhd.png') }}" alt="">
        <h1>{{ Auth::user()->name }}</h1>
        <h2>Pemilik Bisnis</h2>
        <p>{{ $data->desc_pemilik }}</p>
    </div>
</section>

<section class="container" id="infoSaham">
    <div id="sahamUtama">
        <div>
            <h3>Harga Saham</h3>
            <h4>Rp.{{ $data->harga_saham }}</h4>
        </div>
        <div>
            <h3>Total Saham</h3>
            <h4>Rp.{{ $data->total_saham }}</h4>
        </div>
        <div>
            <h3>Kode Saham</h3>
            <h4>BROP</h4>
        </div>
    </div>
    <div id="waktuPembagian">
        <div>
            <h3>Waktu</h3>
            <h4>{{ $data->penawaran }} Bulan / {{ $data->created_at }}</h4>
        </div>
        <div>
            <h3>Periode Dividen</h3>
            <h4>{{ $data->dividen }} Bulan</h4>
        </div>
    </div>
    <div id="persentaseSaham">
        <h3>Persentase Saham</h3>
        <h4>0/<b>100%</b></h4>
    </div>
    <div style="text-align: center;margin-top:20px;">
        <a style="background-color: transparent;border:2px solid #047857;" href="{{ route('fase.7') }}" class="seeAll btn btn-success">Start Penawaran</a>
    </div>
</section>
@endsection