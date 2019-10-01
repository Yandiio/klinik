<?php

namespace App\Model;
use App\Model\penjamin;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    //
    protected $table = 'pasien';
    public $fillable = [ 
        'id', 
        'id_penjamin',
        'nik',
        'tanggal_lahir',
        'nama_lengkap',
        'telepone',
        'hp',
        'tempat_lahir',
        'usia',
        'jenis_kelamin',
        'golongan_darah',
        'agama',
        'keterangan'
        
    ];
    public $timestamps = true;
    protected $appends = ['jk','gd','ag'];

    protected $jk = [
        0 => 'Laki-Laki',
        1 => 'Perempuan', 
    ];
    protected $gd = [
        '0' => 'A',
        '1' => 'B',
        '2' => 'O',
        '3' => 'AB',
    ];
    protected $ag = [
        '0' => 'Islam',
        '1' => 'Kristen Protestan',
        '2' => 'Budha',
        '3' => 'Hindu',
        '4' => 'Khatolik',
    ];

    public function getJkAttribute(){
        return $this->jk[$this->jenis_kelamin];
    }
    public function getGdAttribute(){
        return $this->gd[$this->golongan_darah];
    }
    public function getAgAttribute(){
        return $this->ag[$this->agama];
    }

    
    public function pendaftaran(){
        return $this->hasMany('App\Model\pendaftaran', 'id_pasien', 'id');
    }
    public function penjamin(){
        return $this->belongsTo('App\Model\penjamin', 'id_pasien', 'id');
    }
}
