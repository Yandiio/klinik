<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';

    public $fillable = [
        'nama_obat', 'satuan_jumlah', 'harga_obat'
    ];
}
