@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            Tambah Rekening Bank
        </div>
    </div>
</div>

<section>
    <div class="container" style="background-color: #F2F2F2; padding:20px;">
        <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('beli.saham.post', $usaha->id) }}" enctype="multipart/form-data">
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
                <label for="nama" class="form-label">Nama Usaha</label>
                <input name="nama" type="text" class="form-control" value="{{ $usaha->nama_usaha }}" id="name" required disabled>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="total_saham" class="form-label">Total Pembelian Saham (Batas : {{ $data->total_saham }})</label>
                <input name="total_saham" type="number" class="form-control" id="name" max="{{ $data->total_saham }}" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="bukti" class="form-label">Bukti Pembayaran</label>
                <input name="bukti" type="file" class="form-control" id="name" required>
            </div>
            <button style="background-color: transparent;border:2px solid #047857;text-align:center;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Beli Saham</button>
        </form> 
    </div>
</section>
@endsection