<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail_periksa extends Model
{
    //
    protected $fillable = [
        'id_periksa',
        'id_obat',
    ];

    public function obat() {
        return $this->belongsTo(Obat::class, 'id_obat', 'id');
    }
    
}
