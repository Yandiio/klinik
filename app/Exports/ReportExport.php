<?php

namespace App\Exports;

use App\Model\rekamMedis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;

class ReportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $data;

    public function __construct (array $data)
    {
           //dd($data);
        return $this->data = $data;
    }
    // public function collection()
    // {
        
    //     // return rekamMedis::all();
    //     return $this->data->all();
    // }
    public function array(): array
    {
        return $this->data;
    }
    public function headings(): array {

        return [
            '#',
            'No Medis',
            'Nama Pasien',
            'Jenis Kelamin',
            'Berat Badan',
            'Nama Poli',
            'Hasil Diagnosa',
            'status'];
    }
}
