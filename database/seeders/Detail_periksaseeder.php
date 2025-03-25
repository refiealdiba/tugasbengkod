<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail_periksa;

class Detail_periksaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'id_periksa' => 1,
                'id_obat' => 1
            ],
            [
                'id_periksa' => 2,
                'id_obat' => 2,
            ]
        ];

        foreach($data as $d) {
            Detail_periksa::create([
                'id_periksa' => $d['id_periksa'],
                'id_obat' => $d['id_obat'],
            ]);
        }

    }
}
