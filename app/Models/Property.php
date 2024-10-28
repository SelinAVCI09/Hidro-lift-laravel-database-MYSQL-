<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Bu modelin bağlandığı tablo adı
    protected $table = 'works';

    // Mass assignment (toplu atama) için izin verilen alanlar
    protected $fillable = [
        'label',
        'photo_url',
    ];

    // Gizlenecek alanlar
    protected $hidden = [
        'id',
    ];
}
