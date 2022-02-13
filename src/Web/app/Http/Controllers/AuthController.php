<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usaha;
use App\Models\DataUsaha;
use App\Models\FindPartner;
use Illuminate\Http\Request;
use App\Models\HistoryPembelian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function home(){
        $usaha = Usaha::join('data_usahas', 'data_usahas.usaha_id', '=', 'usahas.id')->get();
        $data = DataUsaha::all();
        $name = 'Home';

        return view('home',compact('usaha','data','name'));

    }

    public function detail($id){
        $usaha = Usaha::find($id);
        $data = DataUsaha::find($id);
        $name = 'Pembelian Saham';
        $total = HistoryPembelian::where('usaha_id', '=',$usaha->id)->pluck('total_saham')->sum();
        // dd($total);
        $hasil = $total/$data->total_saham*100;
        $hasilAkhir = number_format($hasil, 2);
        // dd($hasilAkhir);

        return view('pemilik.7penawaransaham', compact('usaha', 'data', 'name','hasilAkhir'));
    }

    public function beliSaham($id){
        $name= 'Pembelian Saham';
        $usaha = usaha::find($id);
        $data = DataUsaha::find($id);
        return view('investor.pembelian', compact('name','usaha', 'data'));
    }

    public function beliSahamPost($id, Request $request){
        $name= 'Pembelian Saham';

        $namaPemilik = Auth::user()->name;
        
        $fileName = $namaPemilik.$request->bukti->getClientOriginalName();
        $file = $request->file('bukti');
        Storage::disk('asset')->put('buktibayar/'.$fileName, file_get_contents($file));
        
        HistoryPembelian::create([
            'total_saham' =>$request->total_saham,
            'bukti' => $fileName,
            'user_id' => Auth::user()->id,
            'usaha_id' => $id
        ]);
        return redirect()->route('home');
    }

    public function partner(){
        $name = "Cari Partner";
        $get = FindPartner::all();
        // dd($get);
        return view('investor.partner', compact('name','get'));
    }

    public function detailPartner($id){
        $name = "Cari Partner";
        $get = FindPartner::where('user_id','=',$id)->get()->first();
        return view('investor.partnerDetail', compact('name','get'));
    }

    public function register(){
        $name = "Register";
        return view('auth.register',compact('name'));
    }

    public function postRegister(Request $request){
        if($request->password == $request->konfirm){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'fase' => 1
            ]);
            return redirect()->back()->withSuccess('Anda Berhasil Register!');
        }else{
            return redirect()->back()->withWarning('Anda Gagal Register!');
            ;
        }
        
    }

    public function login(){
        $name = "Login";
        return view('auth.login',compact('name'));
    }

    public function postLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // if(Auth::user()->role == "pemilik"){
                // dd(Auth::user()->role);
                if(Auth::user()->fase == 1){
                    return redirect()->intended('/lengkapi-biodata');
                }elseif(Auth::user()->fase == 2){
                    return redirect()->intended('/lengkapi-rekening');
                }elseif(Auth::user()->fase == 3){
                    return redirect()->intended('/form-usaha');
                }elseif(Auth::user()->fase == 4){
                    return redirect()->intended('/cari-partner-start');
                }elseif(Auth::user()->fase == 5){
                    return redirect()->intended('/isi-detail-saham');
                }
                elseif(Auth::user()->fase == 6){
                    return redirect()->intended('/penawaran-awal');
                }elseif(Auth::user()->fase == 7){
                    return redirect()->intended('/penawaran-saham');
                }
            // }
            // return redirect()->intended('/admin/dashboard');
        }
        else{
            return redirect()->back()->withWarning('Anda Gagal Register!');
            ;
        }
    }

    // public function lengkapiBiodataPemilik(){
    //     $name = 'Isi Biodata Pemilik';
    //     return view('pemilik.5detailsaham',compact('name'));
    // }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
