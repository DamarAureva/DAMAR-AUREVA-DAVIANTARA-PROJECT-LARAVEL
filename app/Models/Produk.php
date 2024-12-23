<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'categoris', 'id');
    }

    protected $fillable = [
        'nama',
        'harga',
        'status',
        'categoris'
    ];
        
}
