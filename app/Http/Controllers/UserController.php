<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dataPotensi()
    {
        return view('user.data-anggota');
    }

    // Navbar Sejarah 
    public function sejarahPadalarang()
    {
        return view('user.sejarah.sejarah-padalarang');
    }
    public function sejarahDira()
    {
        return view('user.sejarah.sejarah-dira');
    }
    // end Sejarah

    // Navbar Unit
    public function detailUnit()
    {
        return view('user.unit.detailUnit');
    }
    // public function unitProtokol()
    // {
    //     return view('user.unit.protokoler');
    // }
    //end Unit

    // Navbar Saka
    public function detailSaka()
    {
        return view('user.saka.detailSaka');
    }
    // public function sakaBhaya()
    // {
    //     return view('user.saka.bhayangkara');
    // }
    // public function sakaAdhi()
    // {
    //     return view('user.saka.adhiyasta');
    // }
    // end Saka

    // Navbar Kepengurusan
    public function dewanKerja()
    {
        return view('user.kepengurusan.dewan-kerja');
    }
    public function kwartirRanting()
    {
        return view('user.kepengurusan.kwartir-ranting');
    }
    // end Kepengurusan



    // Navbar Atribute
    public function lambangPdl()
    {
        return view('user.atribute.lambang');
    }
    public function sandiDira()
    {
        return view('user.atribute.sandi-dira');
    }
    // end Artibute


    public function kegiatan()
    {  $apiUrl = "http://127.0.0.1:3000/news/";
        
        $data = file_get_contents($apiUrl);
    
        $newsData = json_decode($data, true);
        
        return view('user.kegiatan.index', ['newsData' => $newsData]);
    }
    public function detailKegiatan()
    {
        return view('user.kegiatan.detail');
    }
 
    
    public function detailInfoTerkini()
    {
        return view('user.info.detail');
    }
    public function hubungiKami()
    {
        return view('user.hubungi-kami');
    }
}
