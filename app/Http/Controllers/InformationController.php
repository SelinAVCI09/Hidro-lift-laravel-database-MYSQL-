<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information; // Veritabanı modelinizin yolu

class InformationController extends Controller
{
    

    // İletişim sayfası için bilgileri çeker
    public function contact()
    {
        $information = Information::all(); // Tüm bilgileri çek
        return view('contact', compact('information')); // 'information' değişkenini view'e gönder
    }

    // Property Grid Page
  

    // Property Single Page
}
