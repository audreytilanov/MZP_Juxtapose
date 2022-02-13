@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 md:text-5xl font-bold text-3xl text-center md:w-2/4 mx-auto w-5/6">
            BASAMA
        </div>
    </div>
</div>

<section>
    <div class="container">
        <br>
        <img src="{{ URL::asset('Guest/tentang/Rectangle 27.png') }}" alt="">
        <br><br>
        <p style="text-align: center; color:black;font-size:20px;"><b>BASAMA</b> merupakan website yang membantu mempertemukan UMKM dengan Pemodal yang bersedia bekerjabersama untuk memperoleh keuntungan bersama berdasarkan dengan kesepakatan yang telah disetujui kedua belah pihak </p>
    </div>
</section>

@endsection