<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{
    // Tüm 'work' kayıtlarını listele
    public function index()
    {
        $works = Work::all();
        return view('works.index', compact('works'));
    }

    // Yeni bir 'work' kaydı oluşturma formunu göster
    public function create()
    {
        return view('works.create');
    }

    // Yeni bir 'work' kaydı oluştur
    // WorksController.php

public function store(Request $request)
{
    $validatedData = $request->validate([
        'admin_id' => 'required|integer',
        'text' => 'required|string|max:255',
        'label' => 'required|string|max:255',
        'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $photoUrls = [];

    if ($request->hasFile('photos')) {
        foreach ($request->file('photos') as $photo) {
            // Dosyayı 'public/uploads' dizinine kaydedin
            $photoPath = $photo->store('uploads', 'public');
            $photoUrls[] = $photoPath;
        }
    }

    Work::create([
        'admin_id' => $validatedData['admin_id'],
        'text' => $validatedData['text'],
        'label' => $validatedData['label'],
        'photo_urls' => json_encode($photoUrls),
    ]);

    return redirect()->route('works.index')->with('success', 'Work created successfully!');
}


    // Belirli bir 'work' kaydını göster
    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('works.show', compact('work'));
    }

    // Belirli bir 'work' kaydını düzenleme formunu göster
    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('works.edit', compact('work'));
    }

    // Belirli bir 'work' kaydını güncelle
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Her bir fotoğraf için doğrulama
        ]);

        $work = Work::findOrFail($id);
        $photoUrls = json_decode($work->photo_urls, true) ?? [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoPath = $photo->store('uploads', 'public');
                $photoUrls[] = $photoPath;
            }
        }

        $work->update([
            'text' => $validatedData['text'],
            'label' => $validatedData['label'],
            'photo_urls' => json_encode($photoUrls), // Fotoğraf yollarını güncelle
        ]);

        return redirect()->route('works.index')->with('success', 'Work updated successfully!');
    }

    // Belirli bir 'work' kaydını sil
    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        $photoUrls = json_decode($work->photo_urls, true) ?? [];
        foreach ($photoUrls as $photoUrl) {
            Storage::disk('public')->delete($photoUrl);
        }

        $work->delete();

        return redirect()->route('works.index')->with('success', 'Work deleted successfully!');
    }
}
