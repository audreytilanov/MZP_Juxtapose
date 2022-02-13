<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\User;
use App\Models\Usaha;
use App\Models\DataUsaha;
use App\Models\FindPartner;
use App\Models\HistoryPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PemilikController extends Controller
{
    public function fase1(){
        $name = 'Lengkapi Biodata';
        return view('pemilik.1biodata',compact('name'));
    }

    public function fase1post(Request $request){
        $temp= User::where('id','=',Auth::user()->id)->get()->first();
        $namaPemilik = Auth::user()->name;
        
        $fileName = $namaPemilik.$request->ktp->getClientOriginalName();
        $file = $request->file('ktp');
        Storage::disk('asset')->put('ktp/'.$fileName, file_get_contents($file));

        $fileName2 = $namaPemilik.$request->npwp->getClientOriginalName();
        $file2 = $request->file('npwp');
        Storage::disk('asset')->put('npwp/'.$fileName2, file_get_contents($file2));
        $temp->update([
    		'no_ktp'=> $request->no_ktp,
    		'kewarganegaraan'=> $request->kewarganegaraan,
    		'tgl_lahir'=> $request->tgl_lahir,
    		'jenis_kelamin'=> $request->jenis_kelamin,
    		'agama'=> $request->agama,
            'alamat'=> $request->alamat,
            'no_telp'=> $request->no_telp,
            'file_ktp'=>$request->ktp->getClientOriginalName(),
            'file_npwp'=>$request->npwp->getClientOriginalName(),
            'fase' => 2
    	]);
        
        return redirect('/lengkapi-rekening')->withSuccess('Anda Berhasil ke Fase 2!');
    }

    public function fase2(){
        $name = 'Lengkapi Rekening';
        return view('pemilik.2rekening',compact('name'));
    }

    public function fase2post(Request $request){
        $temp= User::where('id','=',Auth::user()->id)->get()->first();

        Bank::create([
            'user_id' => Auth::user()->id,
            'no_rek' => $request->no_rek,
            'jenis_bank' => $request->bank
        ]);

        $temp->update([
            'fase' =>3
        ]);

        if(Auth::user()->role == "investor"){
            return redirect('/')->withSuccess('Anda Berhasil Mendaftar');
        }else{
            return redirect('/form-usaha')->withSuccess('Anda Berhasil ke Fase 3!');

        }

    }

    public function fase3(){
        $name = 'Profil Usaha';
        return view('pemilik.3profilusaha',compact('name'));
    }

    public function fase3post(Request $request){
        Usaha::create([
            'user_id' => Auth::user()->id,
            'nama_usaha' => $request->nama_usaha,
            'no_npwp' =>$request->npwp,
            'tahun_berdiri'=>$request->thn_berdiri,
            'jenis_usaha' => $request->jenis_usaha,
            'desc_usaha' => $request->desc_usaha,
            'alamat_usaha' =>$request->alamat_usaha
        ]);

        $temp= User::where('id','=',Auth::user()->id)->get()->first();
        $temp->update([
            'fase' =>4
        ]);

        return redirect('/cari-partner-start')->withSuccess('Anda Berhasil ke Fase 4!');
    }

    public function fase4(){
        $name = 'Find Partner & Start';
        return view('pemilik.4partnerdanstart',compact('name'));
    }

    public function fase4findpartner(){
        $name = 'Find Partner';
        return view('pemilik.4partnersearching',compact('name'));
    }

    public function fase4findpartnerpost(Request $request){
        FindPartner::create([
            'user_id' => Auth::user()->id,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'budayakerja' => $request->budayakerja,
            'milestone' => $request->milestone,
            'kebutuhanmitra' => $request->kebutuhanmitra,
            'tujuanbermitra' => $request->tujuanbermitra,
            'kompetensimitra' => $request->tujuanbermitra,
            'catatan' => $request->catatan,
        ]);
        $temp= User::where('id','=',Auth::user()->id)->get()->first();
        $temp->update([
            'fase' =>5
        ]);
        $name = 'Mulai Penawaran';

        return redirect('/list-detail-saham');
    }

    public function fase5(){
        $usaha = Usaha::where('user_id',Auth::user()->id)->get()->first();
        $name ='Detail Saham';
        return view('pemilik.5detailsaham', compact('name','usaha'));
    }

    public function fase5post(Request $request){
        $temp= User::where('id','=',Auth::user()->id)->get()->first();
        $namaPemilik = Auth::user()->name;
        
        $fileName = $namaPemilik.$request->prospektus->getClientOriginalName();
        $file = $request->file('prospektus');
        Storage::disk('asset')->put('prospektus/'.$fileName, file_get_contents($file));

        $fileName2 = $namaPemilik.$request->foto->getClientOriginalName();
        $file2 = $request->file('foto');
        Storage::disk('asset')->put('fotousaha/'.$fileName2, file_get_contents($file2));

        $fileName3 = $namaPemilik.$request->foto2->getClientOriginalName();
        $file3 = $request->file('foto2');
        Storage::disk('asset')->put('fotousaha/'.$fileName3, file_get_contents($file3));

        DataUsaha::create([
            'user_id' =>Auth::user()->id,
            'file_prospektus' => $fileName,
            'foto' => $fileName2,
            'harga_saham' => $request->harga_saham,
            'total_saham' => $request->total_saham,
            'dividen' => $request->dividen,
            'penawaran' => $request->penawaran,
            'desc_pemilik' => $request->desc_pemilik,
            'foto2' => $fileName3
        ]);

        $temp= User::where('id','=',Auth::user()->id)->get()->first();
        $temp->update([
            'fase' =>6
        ]);

        return redirect('/penawaran-awal');

    }

    public function fase6(){
        $usaha = Usaha::where('user_id',Auth::user()->id)->get()->first();
        $data = DataUsaha::where('user_id',Auth::user()->id)->get()->first();
        // dd($usaha);
        $name ='Penawaran Awal';
        return view('pemilik.6penawaranawal', compact('name','usaha','data'));
    }

    public function fase7(){
        $temp= User::where('id','=',Auth::user()->id)->get()->first();
        $temp->update([
            'fase' =>7
        ]);
        $usaha = Usaha::where('user_id',Auth::user()->id)->get()->first();
        $data = DataUsaha::where('user_id',Auth::user()->id)->get()->first();
        $name ='Detail Saham';
        $total = HistoryPembelian::where('usaha_id', '=',$usaha->id)->pluck('total_saham')->sum();
        // dd($total);
        $hasil = $total/$data->total_saham*100;
        $hasilAkhir = number_format($hasil, 2);
        
        return view('pemilik.7penawaransaham', compact('name','usaha','data','hasilAkhir'));
    }
}
