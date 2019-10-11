<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $table = 'role';
    public $fillable = [ 
        'id', 
        'nama_role',
        'keterangan',
        
        
    ];
    public $timestamps = true;


    public function user(){
        return $this->hasMany('App\Model\user', 'id_role', 'id');
    }
}
