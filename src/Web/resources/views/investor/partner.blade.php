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
    text-underline-offset: 10px;text-decoration-thickness: 3px;margin-top:50px;">Cari Partner</h1>
    <br>
    <div class="periodeSekarang">
        <div class="row">
            @foreach ( $get as $usahas)
            {{-- {{ dd($data) }} --}}
            <div class="card" style="width: 30%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-center font-other"><b>{{ $usahas->nama_usaha }}</b></h5>
                    <p class="card-text text-center text-black font-sekunder">{{ Auth::user()->name }}</p>
                    <p><i class="fa fa-lg fa-share"></i></p>
                    <a href="{{ route('detail.partner',['id' => $usahas->id]) }}" class="btn btn-success">See more</a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <div style="text-align: center;margin-top:20px;">
        <a style="background-color: transparent;border:2px solid #047857;" href="" class="seeAll btn btn-success">See All</a>
    </div>
</div>

@endsection