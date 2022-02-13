@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 md:text-5xl font-bold text-3xl text-center md:w-2/4 mx-auto">
            Ultra Coffee
        </div>
        <div class="text-center pt-3 md:text-base text-[10px] w-5/6 md:w-3/4 mx-auto" style="color: black">
            Alamat : Jalan Antasura
        </div>
    </div>
</div>

<section>
    <div class="container" style="background-color: #F2F2F2; padding:20px;">
        <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('fase.5.post') }}" enctype="multipart/form-data">
            @csrf
            @if( Session::has( 'success' ))
                <div class="alert alert-success" role="alert">
                    {{ Session::get( 'success' ) }}
                </div>
            @elseif( Session::has( 'warning' ))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get( 'warning' ) }}
                </div>
                <!-- here to 'withWarning()' -->
            @endif
            <div class="mb-3" style="text-align: left">
                <label for="prospektus" class="form-label">Prospektus Usaha</label>
                <input name="prospektus" type="file" class="form-control" id="prospektus" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="foto" class="form-label">Foto Pemilik</label>
                <input name="foto" type="file" class="form-control" id="foto" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="harga_saham" class="form-label">Harga Saham</label>
                <input name="harga_saham" type="number" class="form-control" id="harga_saham" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="total_saham" class="form-label">Total Saham</label>
                <input name="total_saham" type="number" class="form-control" id="harga_saham" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="dividen" class="form-label">Periode Dividen (Bulan)</label>
                <input name="dividen" type="text" class="form-control" id="dividen" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="penawaran" class="form-label">Periode Penawaran (Bulan)</label>
                <input name="penawaran" type="text" class="form-control" id="penawaran" required>
            </div>
            
            <div class="mb-3" style="text-align: left">
                <label for="desc_pemilik" class="form-label">Deskripsi Pemilik Usaha</label>
                <textarea name="desc_pemilik" class="form-control" placeholder="Deskripsikan diri anda..." id="floatingTextarea" required></textarea>
            </div>

            <div class="mb-3" style="text-align: left">
                <label for="foto2" class="form-label">Foto Usaha Lainnya</label>
                <input name="foto2" type="file" class="form-control" id="foto2" required>
            </div>
            
            <button style="background-color: transparent;border:2px solid #047857;text-align:center;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Lengkapi Data</button>
        </form> 
    </div>
</section>
@endsection