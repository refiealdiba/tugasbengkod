<?php

namespace Database\Seeders;

// use App\Models\User;
// use App\Models\Obat;
use App\Models\Detail_periksa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // UserSeeder::class
            // PeriksaSeeder::class
            Obatseeder::class
            // Detail_periksaseeder::class
        ]);
    }
}
