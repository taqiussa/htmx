<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTuaPsb extends Model
{
    use HasFactory;
    protected $connection = 'psb';
    protected $table = 'orang_tuas';
}
