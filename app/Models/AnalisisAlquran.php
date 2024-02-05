<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AnalisisAlquran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeGetDataByRequest($query, Request $request)
    {
        return $query->where('tahun', $request->tahun)
            ->where('semester', $request->semester)
            ->where('kategori_nilai_id', $request->kategoriNilaiId)
            ->where('jenis_penilaian_id', $request->jenisPenilaianId)
            ->where('kelas_id', $request->kelasId)
            ->where('nis', $request->nis);
    }

    public function scopeGetDataByRow($query, $row)
    {
        return $query->where('tahun', $row['tahun'])
            ->where('semester', $row['semester'])
            ->where('kategori_nilai_id', $row['kategori_nilai_id'])
            ->where('jenis_penilaian_id', $row['jenis_penilaian_id'])
            ->where('kelas_id', $row['kelas_id'])
            ->where('nis', $row['nis']);
    }
}
