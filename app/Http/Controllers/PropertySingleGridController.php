<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Work;
use Illuminate\Http\Request;

class PropertySingleGridController extends Controller
{
    public function show($id)
    {
        // Veritabanından tek bir mülkü alıyoruz
        $property = Work::findOrFail($id);
        $information = Information::all();
        // photo_urls alanını PHP dizisine dönüştürüyoruz (eğer JSON string ise)
        if (is_string($property->photo_urls)) {
            $property->photo_urls = json_decode($property->photo_urls, true);
        }
        

        // Verileri view'a gönderiyoruz
        return view('property-single', [
            'property' => $property,
            'information' => $information
        ]);
    }
}
