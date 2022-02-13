@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            Form Profil Usaha
        </div>
    </div>
</div>

<section>
    <div class="container" style="background-color: #F2F2F2; padding:20px;">
        <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('fase.3.post') }}" enctype="multipart/form-data">
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
                <label for="nama_usaha" class="form-label">Nama Usaha</label>
                <input name="nama_usaha" type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="npwp" class="form-label">Nomor NPWP</label>
                <input name="npwp" type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="thn_berdiri" class="form-label">Tahun Berdiri</label>
                <input name="thn_berdiri" type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
                <select name="jenis_usaha" class="form-select" aria-label="Default select example">
                    <option selected>Pilih jenis usaha</option>
                    <option value="makanan">Makanan</option>
                    <option value="barangjasa">Barang & Jasa</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="desc_usaha" class="form-label">Deskripsi Usaha</label>
                <textarea name="desc_usaha" class="form-control" placeholder="Deskripsikan usaha anda..." id="floatingTextarea" required></textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
                <input name="alamat_usaha" type="text" class="form-control" id="name" required>
            </div>
            <button style="background-color: transparent;border:2px solid #047857;text-align:center;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Lengkapi Data</button>
        </form> 
    </div>
</section>
@endsection