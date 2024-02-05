<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenilaianSikap extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the jenis that owns the PenilaianSikap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis(): BelongsTo
    {
        return $this->belongsTo(JenisSikap::class)->withDefault();
    }

    /**
     * Get the kategori that owns the PenilaianSikap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriSikap::class)->withDefault();
    }

    /**
     * Get the mapel that owns the PenilaianSikap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mapel(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class)->withDefault();
    }

    /**
     * Get the user that owns the PenilaianSikap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'nis', 'nis')->withDefault();
    }

    public function scopeGetDataByRow($query, $row)
    {
        return $query->where('tahun', $row['tahun'])
            ->where('semester', $row['semester'])
            ->where('kelas_id', $row['kelas_id'])
            ->where('mata_pelajaran_id', $row['mata_pelajaran_id'])
            ->where('kategori_sikap_id', $row['kategori_sikap_id'])
            ->where('jenis_sikap_id', $row['jenis_sikap_id'])
            ->where('nis', $row['nis']);
    }
}
