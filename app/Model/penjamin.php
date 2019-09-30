<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class penjamin extends Model
{
    //
    protected $table = 'penjamin';
    public $fillable = [ 
        'id', 
        'id_tipe_asuransi',
        'id_hubungan',
        'nik',
        'nama_lengkap',
        'telepone',
        'hp',
        'no_polis',
        'tanggal_akhir_polis',
        'keterangan'
    ];
    public $timestamps = true;
    protected $appends = ['hubungan'];
    protected $agama = [
        '0' => 'Pribadi',
        '1' => 'Bapak',
        '2' => 'Ibu',
        '3' => 'Anak',
        '4' => 'Kaka',
        '5' => 'Adik',
        '6' => 'Kake',
        '7' => 'Nenek'
    ];
}
