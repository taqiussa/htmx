<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianProyek extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeGetDataByRow($query, $row)
    {
        return $query->where('tahun', $row['tahun'])
            ->where('kelas_id', $row['kelas_id'])
            ->where('proyek_id', $row['proyek_id'])
            ->where('dimensi_id', $row['dimensi_id'])
            ->where('nis', $row['nis']);
    }
}
