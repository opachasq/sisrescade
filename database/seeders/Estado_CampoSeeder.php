<?php

namespace Database\Seeders;

use App\Models\Estado_campo;
use Illuminate\Database\Seeder;

class Estado_CampoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados_campos = [
            'Disponible',
            'Reservado',
            'Mantenimiento'
        ];

        foreach ($estados_campos as $estado_campo) {
            Estado_campo::create([
                'nombre'=>$estado_campo
            ]);
        }
    }
}
