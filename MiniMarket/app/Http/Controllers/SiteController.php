<?php

namespace App\Http\Controllers;
use App\Models\Site;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getIndex(Request $request)
    {

        return view('index');
    }
    public function getBlog(Request $request)
    {
        return view('blog');

    }
    public function getCategori(Request $request)
    {
        return view('categori');

    }
    public function getMeyve(Request $request)
    {
        return view('meyve');

    }
    public function getSebze(Request $request)
    {
        return view('sebze');

    }
    public function getEturunleri(Request $request)
    {
        return view('eturunleri');

    }
    public function getSuturunleri(Request $request)
    {
        return view('suturunleri');

    }
}
