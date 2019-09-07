<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class alamatPasien extends Model
{
    //
    protected $table = 'alamat_pasien';
    public $fillable = [ 
        'id', 
        'id_pasien',
        'alamat',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'kabupaten',
    ];
    public $timestamps = true;
}
