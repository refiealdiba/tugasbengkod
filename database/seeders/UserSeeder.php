<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'nama' => 'yanuanjay',
                'email' => 'yanuaranjay123@gmail.com',
                'password' => '123',
                'no_hp' => '08123456781',
                'role' => 'dokter',
                'alamat' => 'kampung kali'
            ],
            [
                'nama' => 'welwel',
                'email' => 'welwel123@gmail.com',
                'password' => '123',
                'no_hp' => '081233144',
                'role' => 'dokter',
                'alamat' => 'somewhere'
            ],
            [
                'nama' => 'najwa',
                'email' => 'najwa123@gmail.com',
                'password' => '123',
                'no_hp' => '087124341',
                'role' => 'pasien',
                'alamat' => 'where'
            ],
            [
                'nama' => 'walter white',
                'email' => 'heisenberg@gmail.com',
                'password' => '123',
                'no_hp' => '0893435132',
                'role' => 'pasien',
                'alamat' => 'alberqueq'
            ]
        ];
        
        foreach($data as $d) {
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => $d['password'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'alamat' => $d['alamat']
            ]);
        }
    }
}
