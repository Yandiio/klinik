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
        'status',
        
    ];
    
    public $timestamps = true;
    // protected $appends = ['ts'];
    // protected $ts = [
    //     '0' => 'Menunggu',
    //     '1' => 'Antrian',
    //     '2' => 'Selesai'
    // ];


    public function penjamin(){
        return $this->belongsTo('App\Model\penjamin', 'id_penjamin', 'id');
    }
    public function poli(){
        return $this->belongsTo('App\Model\tipePoli', 'id_tipe_poli', 'id');
    }

    // public function getTsAttribute(){
    //     return $this->ts[$this->status];
    // }
    
}
