<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpp extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'alamat',
        'no_telp',
    ];


}
