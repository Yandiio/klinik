<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipeAsuransi extends Model
{
    //
    protected $table = 'tipe_asuransi';
    public $fillable = [ 
        'id', 
        'nama'
    ];
    public $timestamps = true;

    public function penjamin(){
        return $this->hasMany('App\Model\penjamin', 'id_tipe_asuransi', 'id');
    }
}
