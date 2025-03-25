<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;

class Obatseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
               'nama_obat' => 'anti biotik',
               'kemasan' => 'botol',
               'harga' => 50000
            ],
            [
                'nama_obat' => 'methamine',
                'kemasan' => 'plastik',
                'harga' => 100000,
            ]
        ];

        foreach($data as $d) {
            Obat::create([
                'nama_obat' => $d['nama_obat'],
                'kemasan' => $d['kemasan'],
                'harga' => $d['harga'],
            ]);
        }
    }
}
