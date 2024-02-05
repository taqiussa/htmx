<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the kkm that owns the MataPelajaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kkm(): BelongsTo
    {
        return $this->belongsTo(Kkm::class, 'id', 'mata_pelajaran_id')->withDefault();
    }
}
