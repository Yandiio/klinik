<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class alamatDokter extends Model
{
    //
    protected $table = 'alamat_dokter';
    public $fillable = [ 
        'id',
        'id_dokter', 
        'alamat',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'kabupaten',

    ];
    public $timestamps = true;
}
