<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function Produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
    protected $table = 'kategoris';

    protected $fillable = [
        'nama',
    ];
}
