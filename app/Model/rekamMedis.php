<?php

namespace App\Model;
use App\Model\pendaftaran;
use App\Model\dokter;
use App\Model\tindakanDiagnosa;


use Illuminate\Database\Eloquent\Model;

class rekamMedis extends Model
{
    //
    protected $table = 'rekam_medis';
    public $fillable = [ 
        'id', 
        'id_pendaftaran',
        'id_dokter',
        'no_medis',
        'suhu_badan',
        'berat_badan',
        'berat_badan',
        'tinggi_badan',
        'tekanan_darah',

    ];
    public $timestamps = true;


    public function pendaftaran(){
        return $this->belongsTo('App\Model\pendaftaran', 'id_pendaftaran', 'id');
    }
    public function dokter(){
        return $this->belongsTo('App\Model\dokter', 'id_dokter', 'id');
    }
    public function tindakandiagnosa(){
        return $this->hashMany('App\Model\tindakanDiagnosa', 'id_rekammedis', 'id');
    }
}
