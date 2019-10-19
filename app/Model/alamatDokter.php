<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class alamatDokter extends Model
{
    //
    protected $table = 'alamat_dokter';
    public $fillable = [ 
        'id',
        'id_dokter', 
        'alamat',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'kabupaten',

    ];
    public $timestamps = true;

    public function dokter(){
        return $this->hashMany('App\Model\dokter', 'id');
    }
    public function prvns(){
        return $this->belongsTo('Laravolt\Indonesia\Models\Province', 'provinsi', 'id', 'name');
    }
    public function kbptn(){
        return $this->belongsTo('Laravolt\Indonesia\Models\City', 'kabupaten', 'id');
    }
    public function kcmtn(){
        return $this->belongsTo('Laravolt\Indonesia\Models\District', 'kecamatan', 'id');
    }
    public function klrhn(){
        return $this->belongsTo('Laravolt\Indonesia\Models\Village', 'kelurahan', 'id');
    }   

}