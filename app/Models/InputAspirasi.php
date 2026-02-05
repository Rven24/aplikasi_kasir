<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_siswa', 'aspirasi_siswa', 'kategoris_id'];
    
    protected static function booted()
    {
        static::created(function ($inputAspirasi) {
            $inputAspirasi->aspirasi()->create([
                'nama_siswa' => $inputAspirasi->nama_siswa,
                'status' => 'terkirim',
                'kategoris_id' => $inputAspirasi->kategori->nama_kategori,
            ]);
        });
    }
    
    public function aspirasi()
    {
        return $this->hasOne(Aspirasi::class, 'input_aspirasis_id');
    }
    
    public function kategori()
        {
            return $this->belongsTo(Kategori::class, 'kategoris_id');
        }
}
    