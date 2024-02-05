<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiswaKip extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the alamat that owns the SiswaKip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alamat(): BelongsTo
    {
        return $this->belongsTo(Alamat::class, 'nis', 'nis')->withDefault();
    }

    /**
     * Get the biodata  that owns the SiswaKip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function biodata(): BelongsTo
    {
        return $this->belongsTo(Biodata::class, 'nis', 'nis')->withDefault();
    }

    /**
     * Get the orangTua that owns the SiswaKip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orangTua(): BelongsTo
    {
        return $this->belongsTo(OrangTua::class, 'nis', 'nis')->withDefault();
    }

    /**
     * Get the pencairan that owns the SiswaKip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pencairan(): BelongsTo
    {
        return $this->belongsTo(PencairanKip::class, 'nis', 'nis')->withDefault();
    }

    /**
     * Get the siswa that owns the SiswaKip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis')->withDefault();
    }

    /**
     * Get the user that owns the SiswaKip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'nis', 'nis')->withDefault();
    }
}
