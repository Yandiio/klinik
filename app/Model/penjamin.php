<?php

namespace App\Model;
use App\Model\pasien;

use Illuminate\Database\Eloquent\Model;

class penjamin extends Model
{
    //
    protected $table = 'penjamin';
    public $fillable = [ 
        'id', 
        'id_pasien',
        'id_tipe_asuransi',
        'nik',
        'nama_lengkap',
        'telepone',
        'hp',
        'no_polis',
        'tanggal_akhir_polis',
        'keterangan',
        'hubungan'
    ];
    public $timestamps = true;
    protected $appends = ['hbn'];
    protected $hbn = [
        '0' => 'Pribadi',
        '1' => 'Bapak',
        '2' => 'Ibu',
        '3' => 'Anak',
        '4' => 'Kaka',
        '5' => 'Adik',
        '6' => 'Kake',
        '7' => 'Nenek'
    ];


    public function pasien(){
        return $this->belongsTo('App\Model\pasien', 'id_pasien', 'id');
    }
    public function asuransi(){
        return $this->belongsTo('App\Model\tipeAsuransi', 'id_tipe_asuransi', 'id');
    }

    public function getHbnAttribute(){
        return $this->hbn[$this->hubungan];
    }
}
