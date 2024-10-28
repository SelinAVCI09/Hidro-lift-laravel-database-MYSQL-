<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Information;
use Illuminate\Http\Request;

class PropertyGridController extends Controller
{
    public function index()
    {
        // Veritabanından 'id', 'label' ve 'photo_urls' sütunlarını alarak sayfalama ile properties verisini çekiyoruz
        $properties = Work::select('id', 'label', 'photo_urls')->paginate(9);

        // Tüm Information verisini çekiyoruz
        $information = Information::all();

        // photo_urls alanını PHP dizisine dönüştürüyoruz (eğer JSON string ise)
        foreach ($properties as $property) {
            if (is_string($property->photo_urls)) {
                $property->photo_urls = json_decode($property->photo_urls, true);
            }
        }

        // Verileri view'a gönderiyoruz
        return view('property-grid', [
            'properties' => $properties,
            'information' => $information
        ]);
    }
}
