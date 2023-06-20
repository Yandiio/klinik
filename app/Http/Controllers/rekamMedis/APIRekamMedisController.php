<?php

namespace App\Http\Controllers\rekamMedis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Model\pendaftaran;
use App\Model\pasien;
use DB;

class APIRekamMedisController extends Controller
{
    public function getPasien()
    {
        try {
            $pasien = pasien::with('alamatPasien')->get();
            $pasien->map(function ($item) {
                $item['pendaftaran'] = pendaftaran::where('id_pasien', $item->id)->with('tindakanDiagnosa')->get();
                return $item;
            });

            return response()->json(['message' => 'SUCCESS', 'data' => $pasien]);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function selectPasienList()
    {
        try {
            $pasien = DB::table('pasien')->select('id', 'nama_lengkap')->get();

            return response()->json(['message' => 'SUCCESS', 'data' => $pasien]);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function detailPasien(Request $request)
    {
        try {
            $pasien = pasien::with('alamatPasien')
                        ->where('id', $request->id)
                        ->first();

            return response()->json(['message' => 'SUCCESS', 'data' => $pasien]);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
