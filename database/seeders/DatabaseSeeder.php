<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Number;
use App\Models\Asesor;
use App\Models\User;
use App\Models\PenerimaSertif;
use App\Models\Skema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Asesor::factory(8)->create();
        PenerimaSertif::factory(8)->create();
        User::create([
            'username' => 'lspbomo',
            'password' =>bcrypt('12345')
        ]);
        Skema::create(['nama_skema' => 'Skema Pendamping UMKM']);
        Skema::create(['nama_skema' => 'Skema Ahli K3 UMUM']);
        Skema::create(['nama_skema' => 'Skema Teknisi Penginderaan Jauh']);
        Skema::create(['nama_skema' => 'Skema Penyuluh Kehutanan Fasilitator']);
        Skema::create(['nama_skema' => 'Skema Analis Sumber Daya Manusia (SDM)']);
        Skema::create(['nama_skema' => 'Skema Pengoperasian PLC (Programmable Logic Controller)']);
        Skema::create(['nama_skema' => 'Skema Penerapan K3-Laboratorium']);
        Skema::create(['nama_skema' => 'Skema Programmer']);
    }
}
