<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\User;
use App\Models\Obat;
use App\Models\Detail_periksa;

class PeriksaController extends Controller
{
    public function index() {
        $userId = auth()->user()->id;        
        $periksasByIdPasien = Periksa::where('id_pasien', $userId)->get();
        $periksasByIdDokter = Periksa::where('id_dokter', $userId)->get();
        $dokters = User::where('role', 'dokter')->get();
        $pasiens = User::where('role', 'pasien')->get();
        
        return view('layouts.list-periksa', compact('periksasByIdPasien', 'periksasByIdDokter', 'dokters', 'pasiens'));
    }

    public function daftarPeriksa(Request $request) {
        $request->validate([
            'id_pasien' => 'required',
            'id_dokter' => 'required',
            'tgl_periksa' => 'required',
            'catatan' => 'required',
            'biaya_periksa' => 'required',
            'status' => 'required',
        ]);

        Periksa::create([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
            'status' => 'pending',
        ]);

        return redirect()->route('periksa.index');
    }

    public function detail($id) {        
        $periksa = Periksa::with('detailPeriksa.obat')->find($id);
        return view('layouts.detail-periksa', compact('periksa'));
    }

    public function editPeriksa($id) {
        // Ambil data periksa untuk di-edit
        $periksa = Periksa::find($id);
        $obats = Obat::all();
        return view('layouts.edit-periksa', compact('periksa', 'obats'));
    }

    public function updatePeriksa(Request $request, $id) {
        $request->validate([            
            'catatan' => 'required',
            'biaya_periksa' => 'required',
            'id_obat' => 'required',
            'status' => 'required',
        ]);

        $periksa = Periksa::find($id);
        
        $periksa->update([            
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
            'status' => $request->status,
        ]);

        $detailPeriksa = Detail_periksa::where('id_periksa', $id)->first();
        
        if ($detailPeriksa) {            
            $detailPeriksa->update([
                'id_obat' => $request->id_obat,
            ]);
        } else {            
            Detail_periksa::create([
                'id_periksa' => $id,            
                'id_obat' => $request->id_obat,           
            ]);
        }

        return redirect()->route('periksa');
    }
}
