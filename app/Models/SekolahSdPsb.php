<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SekolahSdPsb extends Model
{
    use HasFactory;
    protected $connection = 'psb';
    protected $table = 'sekolah_sds';

    /**
     * Get the desa that owns the AlamatPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desas(): HasMany
    {
        return $this->hasMany(Desa::class, 'code', 'desa');
    }

    /**
     * Get the kabupaten that owns the AlamatPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kabupatens(): HasMany
    {
        return $this->hasMany(Kabupaten::class, 'code', 'kabupaten');
    }

    /**
     * Get the kecamatan that owns the AlamatPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kecamatans(): HasMany
    {
        return $this->hasMany(Kecamatan::class,  'code', 'kecamatan');
    }

    /**
     * Get the provinsi that owns the AlamatPsb
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provinsis(): HasMany
    {
        return $this->hasMany(Provinsi::class, 'code', 'provinsi');
    }
}
