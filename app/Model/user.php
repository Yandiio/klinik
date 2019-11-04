<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $table = 'users';
    public $fillable = [ 
        'id', 
        'username',
        'password',
        'keterangan',
        'id_role',
        'id_dokter'
        
        
    ];
    public $timestamps = true;


    public function role(){
        return $this->belongsTo('App\Model\role', 'id_role', 'id');
    }
    public function dokter(){
        return $this->belongsTo('App\Model\dokter', 'id_dokter');
    }
}
