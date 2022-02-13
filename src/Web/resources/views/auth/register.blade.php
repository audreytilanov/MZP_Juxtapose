@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center" style="height: 100vh">
    
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama mt-10">
            REGISTER
        </div>
        <div class="text-center pt-3 md:text-base mx-auto font-sekunder" style="color: black">
            <form style="background-color: #FFFFFF;padding:3vw;border-radius:10px;" method="post" action="{{ route('register.post') }}">
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
                    <input name="name" type="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3" style="text-align: left">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3" style="text-align: left">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3" style="text-align: left">
                    <label for="konfirm" class="form-label">Konfirmasi Password</label>
                    <input name="konfirm" type="password" class="form-control" id="konfirm" required>
                </div>
                <select name="role" class="form-select" aria-label="Default select example">
                    <option selected>Daftar Sebagai</option>
                    <option value="investor">Investor</option>
                    <option value="pemilik">Pemilik Usaha</option>
                </select>
                
                <button style="background-color: transparent;border:2px solid #047857;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Login</button>
                <div id="submitHelp" class="form-text">Belum memiliki Akun? <a href="{{ route('register') }}">Daftar</a></div>
            </form>
        </div>
    </div>
</div>

@endsection