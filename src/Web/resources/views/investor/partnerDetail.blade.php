@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            Lengkapi Form Perusahaan Anda
        </div>
        <div class="text-center pt-3 md:text-base w-5/6 md:w-3/4 mx-auto font-sekunder" style="color: black">
            Isi form untuk menemukan partner yang cocok untuk Anda di BASAMA
        </div>
    </div>
</div>

<section>
    <div class="container" style="background-color: #F2F2F2; padding:30px;">
        <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('fase.4.partner.post') }}" enctype="multipart/form-data">
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
                <label for="visi" class="form-label">Visi Perusahaan</label>
                <textarea name="visi" class="form-control" placeholder="Visi usaha anda..." id="floatingTextarea" required disabled>{{ $get->visi }}</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="misi" class="form-label">Misi Perusahaan</label>
                <textarea name="misi" class="form-control" placeholder="Misi usaha anda..." id="floatingTextarea" required disabled>{{ $get->misi }}</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="budayakerja" class="form-label">Budaya Pekerjaan Karyawan</label>
                <textarea name="budayakerja" class="form-control" placeholder="Budaya Pekerjaan karyawan anda..." id="floatingTextarea" required disabled>{{ $get->budayabekerja }}</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="milestone" class="form-label">Milestone Perusahaan 5 Tahun Kedepan</label>
                <textarea name="milestone" class="form-control" placeholder="Milestone 5 Tahun kedepan..." id="floatingTextarea" required disabled>{{ $get->milestone }}</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="kebutuhanmitra" class="form-label">Kebutuhan Bidang Kemitraan</label>
                <textarea name="kebutuhanmitra" class="form-control" placeholder="Kebutuhan Mitra untuk..." id="floatingTextarea" required disabled>{{ $get->kebutuhanmitra }}</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="tujuanbermitra" class="form-label">Alasan dan Tujuan Bermitra</label>
                <textarea name="tujuanbermitra" class="form-control" placeholder="Tujuan BerMitra untuk..." id="floatingTextarea" required disabled>{{ $get->tujuanbermitra }}</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="kompetensimitra" class="form-label">Kredibilitas dan Kompetensi Mitra</label>
                <textarea name="kompetensimitra" class="form-control" placeholder="Kredibilitas dan Kompetensi Mitra untuk..." id="floatingTextarea" required disabled>{{ $get->visi }}kompetensimitra</textarea>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="catatan" class="form-label">Catatan Tambahan untuk Mitra (*opsional)</label>
                <textarea name="catatan" class="form-control" placeholder="Catatan untuk mitra..." id="floatingTextarea" required disabled>{{ $get->catatan }}</textarea>
            </div>

            <button style="background-color: transparent;border:2px solid #047857;text-align:center;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Pilih</button>
        </form> 
    </div>
</section>
@endsection