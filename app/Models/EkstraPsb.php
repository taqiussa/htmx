<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraPsb extends Model
{
    use HasFactory;
    protected $connection = 'psb';
    protected $table = 'ekstras';
}
