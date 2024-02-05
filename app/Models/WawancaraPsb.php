<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WawancaraPsb extends Model
{
    use HasFactory;
    protected $connection = 'psb';
    protected $table = 'wawancaras';
}
