<?php

namespace App\Http\Controllers;

use App\Models\Categori;
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
         //kategoori tablosu içerisindeki tüm verileri al   kategori değişkenine ata
         $categori = Categori::all();
        //categori görüntüle ve categori değişkenini alarak git
        return view('categori',compact('categori'));
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
    public function getCreateCategori(Request $request)
    {
        return view('categori-ekle');
    }

    public function postCreateCategori(Request $request)
    {
        //kategori talosunda  satır aç
        $categori =  new Categori();
        //actıgın satırdaki içeriği doldur
        $categori->create($request->all());
        //geldiğin sayfaya yönlen
        //return redirect()->back();
        return redirect()->route('site.getCategori');
    }
}
