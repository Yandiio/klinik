<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class penjamin extends Model
{
    //
    protected $table = 'diagnosa';
    public $fillable = [ 
        'id', 
        'id_tipe_asuransi',
        'id_hubungan',
        'nik',
        'nama_lengkap',
        'telepone',
        'hp',
        'no_polis',
        'tanggal_akhir_polis',
        'keterangan'
    ];
    public $timestamps = true;
}
