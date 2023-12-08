<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Meyve;
use App\Models\Et;
use App\Models\Sebze;
use App\Models\Sut;
use App\Models\Kiyafet;
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
        $sebze = Sebze::all();
        return view('sebze',compact('sebze'));
    }
    public function getCreateSebze(Request $request)
    {
        return view('sebze-ekle');
    }
    public function postCreateSebze(Request $request)
    {
        $sebze= new Sebze();
        $sebze->create($request->all());
        return redirect()->route('site.getSebze');
    }
    public function postEditSebze(Request $request)
    {
        $sebzebul = Sebze::find($request->id);
        $sebzebul->update($request->all());
        return redirect()->route('site.getSebze');
    }
    public function getEditSebze(Request $request)
    {
        $find = Sebze::find($request->id);
        return view('sebze-duzenle',compact('find'));
    }






    public function getCreateEt(Request $request)
    {
        return view('et-ekle');
    }
    public function getEt ( Request $request)
    {
        $et =Et::all();
        return view('et',compact('et'));
    }
    public function postCreateEt(Request $request)
    {
        $et= new Et();
        $et->create($request->all());
        return redirect()->route('site.getEt');
    }

    public function getEditEt(Request $request)
    {


        $find = Et::find($request->id);
        return view('et-duzenle', compact('find'));
    }


    public function postEditEt(Request $request)
    {

        $etbul = Et::find($request->id);


        $etbul->update($request->all());

        return redirect()->route('site.getEt');



    }












    public function getSut(Request $request)
    {
        $sut = Sut::all();
        return view('sut',compact('sut'));

    }
    public function getCreateSut(Request $request)
    {
        return view('sut-ekle');
    }
    public function getEditSut(Request $request)
    {
        $find = Sut::find($request->id);
        return view('sut-duzenle', compact('find'));
    }
    public function postEditSut(Request $request)
    {
        $sutbul= Sut::find($request->id);
        $sutbul->update($request->all());
        return redirect()->route('site.getSut');
    }
    public function postCreateSut(Request $request)
    {
        $sut = new Sut();
        $sut->create($request->all());
        return redirect()->route('site.getSut');
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



    public function getKiyafet(Request $request)
    {
        $kiyafet = Kiyafet::all();
        return view('kiyafet',compact('kiyafet'));
    }
    public function getCreateKiyafet(Request $request)
    {
        return view('kiyafet-ekle');
    }
    public function getEditKiyafet(Request $request)
    {
        $find = Kiyafet::find($request->id);
        return view('kiyafet-duzenle', compact('find'));
    }
    public function postEditKiyafet(Request $request)
    {
        $kiyafetbul = Kiyafet::find($request->id);
        $kiyafetbul -> update($request->all);

    }
    public function postCreateKiyafet(Request $request)
    {
        $kiyafet = new Kiyafet();
        $kiyafet -> create($request->all());
        return redirect()->route('site.getKiyafet');

    }
}



