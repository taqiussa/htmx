<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JurnalEkstra extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the ekstra that owns the JurnalEkstra
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ekstra(): BelongsTo
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekstrakurikuler_id')->withDefault();
    }

    /**
     * Get the user that owns the JurnalEkstra
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
