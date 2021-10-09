<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'kota',
        'kec',
        'kel',
        'rt_rw',
        'jln',
        'agama',
        'gawe',
        'foto',
    ];
}
