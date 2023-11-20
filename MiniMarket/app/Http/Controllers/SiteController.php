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
    public function getCreateMeyve(Request $request)
    {
        return view('meyve-ekle');

    }
    public function postCreateMeyve(Request $request)
    {
       dd('buraya geldim meyve');

    }


    public function getSebze(Request $request)
    {
        return view('sebze');

    }
    public function getCreateSebze(Request $request)
    {
        return view('sebze-ekle');

    }
    public function postCreateSebze(Request $request)
    {
       dd('buraya geldim sebze');

    }






    public function getEturunleri(Request $request)
    {
        return view('eturunleri');

    }
    public function getCreateEt(Request $request)
    {
        return view('et-ekle');

    }
    public function postCreateEt(Request $request)
    {
       dd('buraya geldim Et');

    }


    public function getSuturunleri(Request $request)
    {
        return view('suturunleri');

    }
    public function getCreateSut(Request $request)
    {
        return view('sut-ekle');

    }
    public function postCreateSut(Request $request)
    {
       dd('buraya geldim sut');

    }

}
