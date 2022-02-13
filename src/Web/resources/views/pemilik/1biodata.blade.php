@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            Profil Biodata Pemilik
        </div>
    </div>
</div>

<section>
    <div class="container" style="background-color: #F2F2F2; padding:20px;">
        <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('fase.1.post') }}" enctype="multipart/form-data">
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
                <label for="name" class="form-label">Nama Lengkap</label>
                <input name="name" type="text" class="form-control" id="name" required disabled value="{{ Auth::user()->name }}">
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" required disabled value="{{ Auth::user()->email }}">
            </div>
            {{-- <div class="mb-3" style="text-align: left">
                <label for="no_terdaftar" class="form-label">Nomor Terdaftar</label>
                <input name="no_terdaftar" type="text" class="form-control" id="email" required>
            </div> --}}
            <div class="mb-3" style="text-align: left">
                <label for="no_ktp" class="form-label">Nomor KTP</label>
                <input name="no_ktp" type="text" class="form-control" id="no_ktp" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                <select name="kewarganegaraan" class="form-select" aria-label="Default select example">
                    <option selected>Pilih kewarganegaraan</option>
                    <option value="laki">Indonesia</option>
                    <option value="perempuan">Warga Asing</option>
                </select>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input name="tgl_lahir" type="date" class="form-control" id="email" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                    <option selected>Pilih jenis kelamin</option>
                    <option value="laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="agama" class="form-label">Agama</label>
                <select name="agama" class="form-select" aria-label="Default select example">
                    <option selected>Pilih agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolik">Katolik</option>
                </select>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="alamat" class="form-label">Alamat Sesuai KTP</label>
                <input name="alamat" type="text" class="form-control" id="email" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="no_telp" class="form-label">No Telepon</label>
                <input name="no_telp" type="text" class="form-control" id="email" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="ktp" class="form-label">Upload KTP</label>
                <input name="ktp" type="file" class="form-control" id="email" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="npwp" class="form-label">Upload NPWP</label>
                <input name="npwp" type="file" class="form-control" id="email" required>
            </div>
            
            <button style="background-color: transparent;border:2px solid #047857;text-align:center;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Lengkapi Data</button>
        </form> 
    </div>
</section>
@endsection