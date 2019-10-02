<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class alamatPasien extends Model
{
    //
    protected $table = 'alamat_pasien';
    public $fillable = [ 
        'id', 
        'id_pasien',
        'alamat',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'kabupaten',
    ];
    public $timestamps = true;


    public function pasien(){
        return $this->hashMany('App\Model\pasien', 'id_pasien', 'id');
    }
    public function prvns(){
        return $this->belongsTo('Laravolt\Indonesia\Models\Province', 'provinsi', 'id');
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
