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
            <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">Unduh Prospektus</a>
        </div>
        <div class="text-center pt-3 md:text-base text-[10px] w-5/6 md:w-3/4 mx-auto" style="color: black">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tempore incidunt minus aliquam enim autem laudantium omnis. Maxime repellat exercitationem modi assumenda laudantium, placeat aliquam hic, mollitia asperiores incidunt optio!
        </div>
    </div>
</div>

<section>
    <div id="periode" class="container">
        <div class="p1">
            <h1><u>Pra Penawaran Saham</u></h1>
        </div>
        <div class="p2">
            <h1>Penawaran Saham</h1>
        </div>
        <div class="p3">
            <h1>Pendanaan Terpenuhi</h1>
        </div>
        <div class="p4">
            <h1>Penyerahan Dana</h1>
        </div>
        <div class="p5">
            <h1>Pembagian Deviden</h1>
        </div>  
    </div>
</section>

<section>
    <div class="container fotoPemilik">
        <img width="300px" src="{{ URL::asset('Usaha/pemilikhd.png') }}" alt="">
        <h1>Bunga Ressanda</h1>
        <h2>Pemilik Bisnis</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci necessitatibus at dicta magnam amet voluptatum dolorum enim vitae deleniti reprehenderit ut eveniet id architecto, dolor tempora minus nulla facere vero?</p>
    </div>
</section>

<section class="container" id="infoSaham">
    <div id="sahamUtama">
        <div>
            <h3>Harga Saham</h3>
            <h4>Rp.100.000</h4>
        </div>
        <div>
            <h3>Total Saham</h3>
            <h4>Rp.500.000.000</h4>
        </div>
        <div>
            <h3>Kode Saham</h3>
            <h4>BROP</h4>
        </div>
    </div>
    <div id="waktuPembagian">
        <div>
            <h3>Sisa Waktu</h3>
            <h4>0</h4>
        </div>
        <div>
            <h3>Periode Dividen</h3>
            <h4>6 Bulan</h4>
        </div>
    </div>
    <div id="persentaseSaham">
        <h3>Persentase Saham</h3>
        <h4>56/<b>100%</b></h4>
    </div>
    <div style="text-align: center;margin-top:20px;">
        <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">Beli Saham</a>
    </div>
</section>
@endsection