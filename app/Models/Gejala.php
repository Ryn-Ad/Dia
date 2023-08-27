<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';
    public $timestamps = false;
    protected $primaryKey = 'index_gejala';

    protected $fillable = [
        'kode_gejala',
        'nama_gejala',
        'value_gejala',
    ];

    protected $attributes = [
        'value_gejala' => 1,
    ];
}
