<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Work;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show($id)
    {
        
        // Veritabanında ID'ye göre property'i buluyoruz
        $property = Work::find($id);

        // Property bulunamazsa 404 hata döndürüyoruz
        if (!$property) {
            abort(404);
        }

        // Detayları göstereceğimiz view'a property'i gönderiyoruz
        return view('property-single', ['property' => $property]);
    }
  
}
