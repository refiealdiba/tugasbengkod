<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga',
    ];

    public function obat(): HasMany {
        return $this->hasMany(Detail_periksa::class, 'id_obat', 'id');
    }
}
