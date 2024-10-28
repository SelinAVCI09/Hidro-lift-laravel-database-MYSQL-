<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Information extends Model
{
    protected $table = 'information';
    protected $fillable = ['admin_id', 'tel_number1', 'tel_number2', 'address', 'mail'];
}
