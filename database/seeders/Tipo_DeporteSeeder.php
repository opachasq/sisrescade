<?php

namespace Database\Seeders;

use App\Models\Tipo_deporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_DeporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_deportes = [
            'Futbol',
            'Voley'
        ];

        foreach ($tipo_deportes as $tipo_deporte) {
            Tipo_deporte::create([
                'nombre'=>$tipo_deporte
            ]);
        }
    }
}
