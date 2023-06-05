<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class Yonet extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function site()
    {
        $data["yazi1"]="Desa Ambalaj";
        $data["yazi2"]="Web Sitemize Hoşgeldiniz.";
        $data["yazi3"]="Hakkımızda";
        $data["yazi4"]="2012 Yılı İtibariyle Plastik Sektöründe Hizmet Vermekteyiz. Naylon, Poşet, Streç, Kağıt vb. Ürünlerde Üretime Dayalı , Kalite ve Güven İçerisinde Müşterilerimizin İhtiyaçları Doğrultusunda, Yurtiçi, Yurtdışı Olmak Üzere Ürün Tedariği Yapıyoruz. Doğayı Önemseyerek Ürünlerimiz %100 Doğaya Dönüşümlü Olacak Şekilde, Doğamızı Korumak İçin Kaliteden Ödün Vermeden, Yaşanılabilir Gelecek Adına Üretim Yapmaktayız.";
        $data["yazi5"]="Bize Ulaşın";
        $product = new ProductModel();
        $data['product']= $product->all();
        return view('web',$data);
    }

    public function hakkımızda()
    {
        $data["y1"]="Hakkımızda";
        $data["y2"]="Web Sitemize Hoşgeldiniz.";
        $data["y3"]="Hakkımızda";
        $data["y4"]="2012 Yılı İtibariyle Plastik Sektöründe Hizmet Vermekteyiz. Naylon, Poşet, Streç, Kağıt vb. Ürünlerde Üretime Dayalı , Kalite ve Güven İçerisinde Müşterilerimizin İhtiyaçları Doğrultusunda, Yurtiçi, Yurtdışı Olmak Üzere Ürün Tedariği Yapıyoruz. Doğayı Önemseyerek Ürünlerimiz %100 Doğaya Dönüşümlü Olacak Şekilde, Doğamızı Korumak İçin Kaliteden Ödün Vermeden, Yaşanılabilir Gelecek Adına Üretim Yapmaktayız.";
        $data["y5"]="Bize Ulaşın";
        return view('hakkımızda',$data);
    }
    public function iletisim()
    {
        $data["i1"]="İletişim";
        $data["i2"]="Web Sitemize Hoşgeldiniz.";
        return view('iletisim',$data);
    }

    public function urunlerimiz()
    {
        $data["u1"]="Ürünlerimiz";
        $data["u2"]="Web Sitemize Hoşgeldiniz.";
        $product = new ProductModel();
        $data['product']= $product->all();
        // print_r($data['product']); die;
        return view('urunlerimiz',$data);
    }
}
