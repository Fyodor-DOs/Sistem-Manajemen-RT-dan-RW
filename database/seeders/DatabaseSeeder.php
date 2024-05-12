<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AgamaSeeder::class,
            UsersSeeder::class,
            RtSeeder::class,
            RwSeeder::class,
            KeluargaSeeder::class,
            KegiatanSeeder::class,
            PengaduanSeeder::class,
            PemasukanRWSeeder::class,
            PengeluaranRWSeeder::class,
            PemasukanRTSeeder::class,
            PengeluaranRTSeeder::class,
            SuratDomisiliSeeder::class,
            SuratSKTMSeeder::class,
            RoleSeeder::class,
            AdministratorSeeder::class,
        ]);
    }
}
