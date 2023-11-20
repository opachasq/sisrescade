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
        $this->call([
            UserSeeder::class,
            GeneroSeeder::class,
            Metodo_PagoSeeder::class,
            Estado_PagoSeeder::class,
            Estado_CampoSeeder::class,
            Tipo_DeporteSeeder::class,
            HoraSeeder::class,
            Estado_reservaSeeder::class

        ]);
    }
}
