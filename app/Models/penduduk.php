<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class penduduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'tgllhr',
        'telpon',
    ];
}
