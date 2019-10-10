<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tindakanLab extends Model
{
    //
    protected $table = 'tindakan_lab';
    public $fillable = [ 
        'id', 
        'id_laboratorium',
        'id_rekammedis'
    ];
    public $timestamps = true;

    public function rekammedis(){
        return $this->belongsTo('App\Model\rekamMedis', 'id_rekammedis', 'id');
    }

    public function lab(){
        return $this->belongsTo('App\Model\laboratorium', 'id_lab', 'id');
    }
}
