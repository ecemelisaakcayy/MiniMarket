<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Meyve;
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







    public function getMeyve(Request $request)
    {
        $meyve = Meyve::all();

        return view('meyve',compact('meyve'));
    }
    public function getCreateMeyve(Request $request)
    {
        return view('meyve-ekle');
    }


    public function getEditMeyve(Request $request)
    {
        //duzenlenecek veriyi bul

        $find = Meyve::find($request->id);
        return view('meyve-duzenle', compact('find'));
    }
    public function postEditMeyve(Request $request)
    {

        $meyvebul = Meyve::find($request->id);

        $meyvebul->update($request->all());

        return redirect()->route('site.getMeyve');



    }
    public function postCreateMeyve(Request $request)
    {
        //kategori talosunda  satır aç
        $meyve =  new Meyve();
        //actıgın satırdaki içeriği doldur
        $meyve->create($request->all());
        //geldiğin sayfaya yönlen
        //return redirect()->back();
        return redirect()->route('site.getMeyve');
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




    public function getCategori(Request $request)
    {
         //kategoori tablosu içerisindeki tüm verileri al   kategori değişkenine ata
         $categori = Categori::all();
        //categori görüntüle ve categori değişkenini alarak git
        return view('categori',compact('categori'));
    }
    public function getCreateCategori(Request $request)
    {
        return view('categori-ekle');
    }
    public function getEditCategori(Request $request)
    {
        //duzenlenecek veriyi bul

        $find = Categori::find($request->id);
        return view('categori-duzenle', compact('find'));
    }


    public function postEditCategori(Request $request)
    {
        //duzenlenen veriyi bul
        $veribul = Categori::find($request->id);
        //veri duzenle
        $veribul->update($request->all());
        //geri dönüş yap
        return redirect()->route('site.getCategori');



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
