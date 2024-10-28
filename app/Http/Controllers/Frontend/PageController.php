<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;  // DB sınıfını dahil ediyoruz

use App\Models\Information; 
class PageController extends Controller
{
    // Ana sayfa
    public function index()
    {
        return view('index');
    }

    // Admin Giriş Sayfası
    public function admin()
    {
        return view('admin_login');
    }

    // Admin Ana Sayfası
    public function adminHome()
    {
        return view('admin_home');
    }

    // Bilgi Ekleme Sayfası
    public function addInformation()
    {
        return view('add_information');
    }

    // İş Ekleme Sayfası
    public function addWorks()
    {
        return view('add_works');
    }

    // Bilgi Düzenleme Sayfası
    public function editInformation($id)
    {
        // Bilgi verisini alarak düzenleme sayfasına yönlendirme
        $information = DB::table('information')->where('id', $id)->first();
        return view('edit_information', compact('information'));
    }

    // İş Düzenleme Sayfası
    public function editWorks($id)
    {
        // İş verisini alarak düzenleme sayfasına yönlendirme
        $work = DB::table('works')->where('id', $id)->first();
        return view('edit_works', compact('work'));
    }

    // İletişim Sayfası
    public function contact()
    {  
        $information = Information::all(); // Tüm bilgileri çek
        return view('contact', compact('information')); // 'information' değişkenini view'e gönder
   

    }

    // Emlak Listeleme Sayfası
    public function propertyGrid()
    {
        return view('property-grid');
    }

    // Emlak Tekil Sayfası
    public function propertySingle()
    {
        return view('property-single');
    }

    // Hoşgeldiniz Sayfası
    public function welcome()
    {
        return view('welcome');
    }

    // Kullanıcı Çıkış İşlemi
    public function logout()
    {
        // Çıkış işlemi
        // Kullanıcı oturumu sonlandırma kodlarını ekleyin
        return redirect()->route('index');
    }
}
