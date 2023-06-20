<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tindakanDiagnosa extends Model
{
    //
    protected $table = 'tindakan_diagnosa';
    public $fillable = [ 
        'id', 
        'hasil_diagnosa',
        'id_rekammedis',
        'harga',
        'id_obat'
    ];
    public $timestamps = true;

    public function rekammedis(){
        return $this->hasMany('App\Model\rekamMedis', 'id_rekammedis', 'id');
    }

    public function pendaftaran(){
        return $this->hasOne('App\Model\pendaftaran', 'id_pendaftaran', 'id');
    }
    
}
