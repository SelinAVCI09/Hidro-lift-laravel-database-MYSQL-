<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Information;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // 'id', 'label' ve 'photo_urls' sütunlarını seçip sayfalama ile properties verisini alıyoruz
        $properties = Work::select('id', 'label', 'photo_urls')->paginate(3);

        // Tüm Information verisini alıyoruz
        $information = Information::all();

        // photo_urls alanını PHP dizisine dönüştürüyoruz (eğer JSON string ise)
        foreach ($properties as $property) {
            if (is_string($property->photo_urls)) {
                $property->photo_urls = json_decode($property->photo_urls, true);
            }
        }

        // Verileri view'a gönderiyoruz
        return view('index', [
            'properties' => $properties,
            'information' => $information
        ]);
    }
}
