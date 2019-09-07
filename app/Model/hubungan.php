<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hubungan extends Model
{
    //
    protected $table = 'hubungan';
    public $fillable = [ 
        'id', 
        'hubungan_keluarga',
    ];
    public $timestamps = true;
}
