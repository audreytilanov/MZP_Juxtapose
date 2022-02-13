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
        <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('fase.2.post') }}" enctype="multipart/form-data">
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
                <label for="no_rek" class="form-label">Nomor Rekening</label>
                <input name="no_rek" type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3" style="text-align: left">
                <label for="bank" class="form-label">Jenis Bank</label>
                <select name="bank" class="form-select" aria-label="Default select example">
                    <option selected>Pilih bank</option>
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="BPD">BPD</option>
                </select>
            </div>
            <button style="background-color: transparent;border:2px solid #047857;text-align:center;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Lengkapi Data</button>
        </form> 
    </div>
</section>
@endsection