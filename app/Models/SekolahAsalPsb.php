<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SekolahAsalPsb extends Model
{
    use HasFactory;
    protected $connection = 'psb';
    protected $table = 'sekolah_asals';
}
