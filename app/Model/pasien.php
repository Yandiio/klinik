<?php

namespace App\Model;

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
    protected $appends = ['jeniskelamin'];

    // protected $jeniskelamin = [
    //     '0' => 'Laki-Laki',
    //     '1' => 'Perempuan', 
    // ];
    // protected $golongandarah = [
    //     '0' => 'A',
    //     '1' => 'B',
    //     '2' => 'O',
    //     '3' => 'AB',
    // ];
    // protected $agama = [
    //     '0' => 'Islam',
    //     '1' => 'Kristen Protestan',
    //     '2' => 'Budha',
    //     '3' => 'Hindu',
    //     '4' => 'Khatolik',
    // ];

    public function getJeniskelaminAttribute(){
        return $this->jeniskelamin[$this->jenis_kelamin];
    }
    // public function getGolongandarahAttribute(){
    //     return $this->golongandarah;
    // }
    // public function getAgamaAttribute(){
    //     return $this->agama;
    // }

}
