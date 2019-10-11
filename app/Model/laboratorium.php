<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class laboratorium extends Model
{
    //
    protected $table = 'laboratorium';
    public $fillable = [ 
        'id', 
        'nama',
        'keterangan',
    ];
    public $timestamps = true;


    public function tindakanlab(){
        return $this->hashMany('App\Model\tindakanLab', 'id_lab', 'id');
    }
}
