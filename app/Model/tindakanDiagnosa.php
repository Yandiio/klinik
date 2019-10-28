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
        'id_rekammedis'
    ];
    public $timestamps = true;

    public function rekammedis(){
        return $this->belongsTo('App\Model\rekamMedis', 'id_rekammedis', 'id');
    }
    
}
