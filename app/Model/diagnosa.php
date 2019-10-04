<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class diagnosa extends Model
{
    //
    protected $table = 'diagnosa';
    public $fillable = [ 
        'id',
        'kode_diagnosa',
        'nama',
        'hasil_diagnosa',
        'keterangan'
    ];
    public $timestamps = true;
}
