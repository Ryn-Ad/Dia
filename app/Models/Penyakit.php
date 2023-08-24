<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';
    public $timestamps = false;
    protected $primaryKey = 'index_penyakit';

    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
        'solusi_penyakit',
    ];

    protected $attributes = [
        'value_penyakit' => 0
    ];
}
