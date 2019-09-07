<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    //
    protected $table = 'pasien';
    public $fillable = [ 
        'id', 
        'id_penjamin',
        'nik',
        'tanggal_lahir',
        'nama_lengkap',
        'telepone',
        'hp',
        'tempat_lahir',
        'usia',
        'jenis_kelamin',
        'golongan_darah',
        'agama',
        'keterangan'
        
    ];
    public $timestamps = true;
}
