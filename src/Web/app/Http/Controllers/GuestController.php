<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function langkahInvestasi(){
        $name = 'Langkah Investasi';
        return view('langkahInvestasi',compact('name'));
    }

    public function tentangBasama(){
        $name = 'Tentang BASAMA';
        return view('tentangBasama',compact('name'));
    }

    public function usaha(){
        $name = 'Tentang Usaha';
        return view('usaha.usaha',compact('name'));
    }
}
