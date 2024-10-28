<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    // Zaman damgalarını kullanmıyoruz
    public $timestamps = false;

    // Tablo adı
    protected $table = 'works';

    // Mass assignment (toplu atama) için izin verilen alanlar
    protected $fillable = [
        'admin_id',
        'text',
        'label',
        'photo_urls',
    ];

    // JSON veriyi dizi olarak cast et
    protected $casts = [
        'photo_urls' => 'array',
    ];

    // İlk fotoğraf URL'sini döndür
    public function getFirstPhotoUrlAttribute()
    {
        return !empty($this->photo_urls) && is_array($this->photo_urls) ? $this->photo_urls[0] : 'https://via.placeholder.com/500x300.png';
    }

    // Admin modeline ilişkili olarak tanımlayın
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
