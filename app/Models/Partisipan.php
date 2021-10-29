<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partisipan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kpp_id',
        'nama',
        'email',
        'jenis_kelamin',
    ];

    public function kpp()
    {
        return $this->belongsTo(Kpp::class);
    }
}
