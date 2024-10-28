<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Admin ana sayfası
    public function index()
    {
        $information = DB::table('information')->get();
        $works = DB::table('works')->get();
        return view('admin_home', compact('information', 'works'));
    }

    // Bilgi ekleme formu
    public function createInformation()
    {
        return view('add_information');
    }

    // Bilgi ekleme işlemi
    public function storeInformation(Request $request)
    {
        $this->validateInformation($request);

        DB::table('information')->insert($request->only([
            'admin_id', 'tel_number1', 'tel_number2', 'address', 'mail'
        ]));

        return redirect()->route('admin_home')->with('success', 'Bilgi başarıyla eklendi.');
    }

    // Bilgi düzenleme formu
    public function editInformation($id)
    {
        $information = DB::table('information')->find($id);
        return view('edit_information', compact('information'));
    }

    // Bilgi güncelleme işlemi
    public function updateInformation(Request $request, $id)
    {
        $this->validateInformation($request);

        DB::table('information')->where('id', $id)->update($request->only([
            'admin_id', 'tel_number1', 'tel_number2', 'address', 'mail'
        ]));

        return redirect()->route('admin_home')->with('success', 'Bilgi başarıyla güncellendi.');
    }

    // Bilgi silme işlemi
    public function deleteInformation(Request $request)
    {
        $request->validate(['id' => 'required|integer']);

        DB::table('information')->where('id', $request->input('id'))->delete();
        return redirect()->route('admin_home')->with('success', 'Bilgi başarıyla silindi.');
    }

    // İş ekleme formu
    public function createWorks()
    {
        return view('add_works');
    }

    // İş ekleme işlemi
    public function storeWorks(Request $request)
    {
        $this->validateWorks($request);

        $photoUrls = $this->storePhotos($request);

        DB::table('works')->insert([
            'admin_id' => $request->input('admin_id'),
            'text' => $request->input('text'),
            'label' => $request->input('label'),
            'photo_urls' => json_encode($photoUrls),
        ]);

        return redirect()->route('admin_home')->with('success', 'İş başarıyla eklendi.');
    }

    // İş düzenleme formu
    public function editWorks($id)
    {
        $work = DB::table('works')->find($id);
        return view('edit_works', compact('work'));
    }

    // İş güncelleme işlemi
    public function updateWorks(Request $request, $id)
    {
        $this->validateWorks($request);

        $work = DB::table('works')->find($id);
        $photoUrls = json_decode($work->photo_urls, true) ?? [];
        $newPhotoUrls = $this->storePhotos($request);

        DB::table('works')->where('id', $id)->update([
            'admin_id' => $request->input('admin_id'),
            'text' => $request->input('text'),
            'label' => $request->input('label'),
            'photo_urls' => json_encode(array_merge($photoUrls, $newPhotoUrls)),
        ]);

        return redirect()->route('admin_home')->with('success', 'İş başarıyla güncellendi.');
    }

    // İş silme işlemi
    public function deleteWorks(Request $request)
    {
        $request->validate(['id' => 'required|integer']);

        $work = DB::table('works')->find($request->input('id'));
        $this->deletePhotos($work->photo_urls);
        
        DB::table('works')->where('id', $request->input('id'))->delete();
        return redirect()->route('admin_home')->with('success', 'İş başarıyla silindi.');
    }

    // Bilgi doğrulama
    private function validateInformation(Request $request)
    {
        $request->validate([
            'admin_id' => 'required|integer',
            'tel_number1' => 'required|string',
            'tel_number2' => 'nullable|string',
            'address' => 'required|string',
            'mail' => 'required|email',
        ]);
    }

    // İş doğrulama
    private function validateWorks(Request $request)
    {
        $request->validate([
            'admin_id' => 'required|integer',
            'text' => 'required|string',
            'label' => 'required|string',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    // Fotoğrafları yükle
    private function storePhotos(Request $request)
    {
        $photoUrls = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoUrls[] = $photo->store('uploads', 'public');
            }
        }

        return $photoUrls;
    }

    // Fotoğrafları sil
    private function deletePhotos($photoUrls)
    {
        $photoUrlsArray = json_decode($photoUrls, true) ?? [];

        foreach ($photoUrlsArray as $photoUrl) {
            Storage::disk('public')->delete($photoUrl);
        }
    }
}
