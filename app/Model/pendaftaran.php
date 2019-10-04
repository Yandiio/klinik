<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    //
    protected $table = 'pendaftaran';
    public $fillable = [ 
        'id', 
        'id_pasien',
        'id_tipe_poli',
        'no_daftar',
        'keluhan',
        
    ];
    public $timestamps = true;


    public function penjamin(){
        return $this->belongsTo('App\Model\penjamin', 'id_penjamin', 'id');
    }
    public function poli(){
        return $this->belongsTo('App\Model\tipePoli', 'id_tipe_poli', 'id');
    }
}
