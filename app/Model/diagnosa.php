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


    public function tindakandiagnosa(){
        return $this->hashMany('App\Model\diagnosa', 'id_diagnosa', 'id');
    }
}
