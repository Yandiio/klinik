<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipePoli extends Model
{
    //
    protected $table = 'tipe_poli';
    public $fillable = [ 
        'id', 
        'nama',
        
    ];
    public $timestamps = true;


    public function poli(){
        return $this->hasMany('App\Model\tipePoli', 'id_tipe_poli', 'id');
    }
    
}
