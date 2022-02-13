@extends('layouts.main')



@section('container')

<div class="w-full md:h-[500px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center" style="height: 100vh">
    <div>
        <div class="text-green-700 font-bold text-center md:w-2/4 mx-auto w-5/6 font-utama">
            LOGIN
        </div>
        <div class="text-center pt-3 md:text-base w-5/6 md:w-3/4 mx-auto font-sekunder" style="color: black">
            <form style="background-color: #FFFFFF;padding:4vw;border-radius:10px;" method="post" action="{{ route('login.post') }}">
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
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3" style="text-align: left">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <button style="background-color: transparent;border:2px solid #047857;" class="seeAll btn btn-success" type="submit" class="btn btn-primary">Login</button>
                <div id="submitHelp" class="form-text">Belum memiliki Akun? <a href="{{ route('register') }}">Daftar</a></div>
            </form>
        </div>
    </div>
</div>

@endsection