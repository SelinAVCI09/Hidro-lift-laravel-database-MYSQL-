<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    // Tablo adı belirtin
    protected $table = 'admins';

    // Varsayılan olarak 'id' sütunu birincil anahtar olarak kabul edilir.
    protected $primaryKey = 'id';

    // Eloquent'te hangi alanların toplu atanabilir olduğunu belirtin
    protected $fillable = ['username', 'password'];

    // Eğer tabloda created_at ve updated_at alanları yoksa bu satırı uncomment edin
    // public $timestamps = false;
}
