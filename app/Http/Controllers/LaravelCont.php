<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LaravelCont extends Controller
{
    public function anasayfa(){
        return view('anasayfa');
    }

    public function hakkimizda(){
        $title = "Hakkımızda";
        $keywords = "Hakkımızda Anahtar Kelimeler";
        $sayfa = "Hakkımızda Sayfasındayız";
        return view('hakkimizda')->with('sayfaTitle' , $title)->with('sayfaKeywords' , $keywords)->with('sayfaIsmi' , $sayfa);
    }

    public function iletisim(){
        $title = "İletişim";
        $keywords = "İletişim Anahtar Kelimeler";
        $sayfa = "İletişim Sayfasındayız";
        return view ('iletisim' , compact('title' , 'keywords' , 'sayfa'));
    }

    public function parametreDenemesi($id=null){

        if($id)
        {
            $deger = $id;
        }else{
            $deger = 'Parametre Değeri Bulunmamaktadır';
        }

        $title = "Parametre Denemesi";
        $keywords = "Parametre Denemesi Anahtar Kelimeler";
        $sayfa = "Parametre Denemesi Sayfasındayız";
        return view ('parametredenemesi' , compact('title' , 'keywords' , 'sayfa' , 'deger'));

    }
}
