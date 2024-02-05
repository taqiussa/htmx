<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPsb extends Model
{
    use HasFactory;
    protected $connection = 'psb';
    protected $table = 'users';

    /**
     * Get the alamat that owns the UserPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alamat(): BelongsTo
    {
        return $this->belongsTo(AlamatPsb::class,  'id', 'user_id')->withDefault();
    }

    /**
     * Get the biodata that owns the UserPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function biodata(): BelongsTo
    {
        return $this->belongsTo(BiodataPsb::class,  'id', 'user_id')->withDefault();
    }

    /**
     * Get the orangTua that owns the UserPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orangTua(): BelongsTo
    {
        return $this->belongsTo(OrangTuaPsb::class,  'id', 'user_id')->withDefault();
    }

    /**
     * Get the sekolahAsal that owns the UserPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sekolahAsal(): BelongsTo
    {
        return $this->belongsTo(SekolahAsalPsb::class,  'id', 'user_id')->withDefault();
    }

    /**
     * Get the sekolahSd that owns the UserPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sekolahSd(): BelongsTo
    {
        return $this->belongsTo(SekolahSdPsb::class,  'id', 'user_id')->withDefault();
    }

    /**
     * Get the wali that owns the UserPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wali(): BelongsTo
    {
        return $this->belongsTo(WaliPsb::class,  'id', 'user_id')->withDefault();
    }
}
