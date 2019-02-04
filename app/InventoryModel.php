<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    protected $table = 'inventory';

    public $fillable = [
        'nama_obat',
        'jumlah_obat',
    ];

}
