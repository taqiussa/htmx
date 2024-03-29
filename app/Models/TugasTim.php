<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasTim extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriPenilaianGuru::class, 'kategori_nilai_id')->withDefault();
    }
    
    public function jenis()
    {
        return $this->belongsTo(JenisPenilaianGuru::class, 'jenis_penilaian_id')->withDefault();
    }
}
