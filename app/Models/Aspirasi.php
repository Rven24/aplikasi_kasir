<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'input_aspirasi_id',
        'nama_kategori',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];
    
    public function kategoris() {
        return $this->hasMany(Kategori::class);
    }
}
