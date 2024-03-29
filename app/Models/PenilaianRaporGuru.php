<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianRaporGuru extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function kategori()
    {
        return $this->belongsTo(KategoriPenilaianGuru::class, 'kategori_nilai_id')->withDefault();
    }

    public function jenis()
    {
        return $this->belongsTo(JenisPenilaianGuru::class, 'jenis_penilaian_id')->withDefault();
    }

    public function nilai()
    {
        return $this->hasMany(PenilaianGuru::class, 'jenis_penilaian_id', 'jenis_penilaian_id');
    }

    public function penilaian()
    {
        return $this->belongsTo(PenilaianGuru::class, 'jenis_penilaian_id', 'jenis_penilaian_id')->withDefault();
    }

    public function kkm()
    {
        return $this->belongsTo(KkmGuru::class, 'jenis_penilaian_id', 'jenis_penilaian_id')->withDefault();
    }
}
