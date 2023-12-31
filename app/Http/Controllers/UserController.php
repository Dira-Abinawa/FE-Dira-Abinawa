<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Http;
use Response;

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


    public function news()
    {  $apiUrl = "http://127.0.0.1:3000/news/";

        $data = file_get_contents($apiUrl);

        $newsData = json_decode($data, true);

        return view('user.news.index', ['newsData' => $newsData]);
    }


    public function detailInfoTerkini()
    {
        return view('user.info.detail');
    }
    public function hubungiKami()
    {
        return view('user.hubungi-kami');
    }

    // public function detailNewsUser($id)
    // {
    //     $response = Http::get("http://127.0.0.1:3000/news/{$id}");
    //     if ($response->successful()) {
    //         $news = $response->json();
    //     } else {
    //     Flash::error('Failed to fetch school data from the API.');
    //         return redirect(route('news.index'));
    //     }
    //     return view('user.detail-news')->with('news', $news);
    // }

    public function detailNewsUser($id)
    {
        $apiUrl = "http://127.0.0.1:3000/news/{$id}";

        $news = file_get_contents($apiUrl);

        $newsData = json_decode($news, true);

        // Pass $newsData to the view, not $news
        return view('user.detail-news')->with('news', $newsData);
    }

}
