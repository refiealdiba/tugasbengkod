<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //
                // $data = [
                //     [
                //         'id_pasien' => 3,
                //         'id_dokter' => 1,
                //         'catatan' => 'sehat sekali',
                //         'tgl_periksa' => '2025-03-19 21:53:00',
                //         'biaya_periksa' => 50000,                        
                //     ],
                //     [
                //         'id_pasien' => 2,
                //         'id_dokter' => 4,
                //         'catatan' => 'give me more meth',
                //         'tgl_periksa' => '2025-03-19 21:53:00',
                //         'biaya_periksa' => 150000,                        
                //     ],
                    
                // ];
                
                // foreach($data as $d) {
                //     Periksa::create([
                //         'id_pasien' => $d['id_pasien'],
                //         'id_dokter' => $d['id_dokter'],
                //         'catatan' => $d['catatan'],
                //         'tgl_periksa' => $d['tgl_periksa'],
                //         'biaya_periksa' => $d['biaya_periksa'],                    
                //     ]);
                // }
    }
}
