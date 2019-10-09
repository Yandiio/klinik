<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dokter';
    public $fillable = [ 
        'id', 
        'kode_dokter',
        'id_tipe_poli',
        'alamat_dokter',
        'nik',
        'tanggal_lahir',
        'nama_lengkap',
        'telepon',
        'hp',
        'tempat_lahir',
        'usia',
        'jenis_kelamin',
        'agama',
        'keterangan'
    ];
    public $timestamps = true;

    public function poli(){
        return $this->belongsTo('App\Model\tipePoli', 'id_tipe_poli', 'id');
    }

    public function alamatdokter(){
        return $this->belongsTo('App\Model\alamatDokter', 'alamat_dokter', 'id');
    } 

}
