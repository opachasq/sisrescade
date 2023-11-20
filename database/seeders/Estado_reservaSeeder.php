<?php

namespace Database\Seeders;

use App\Models\Estado_reserva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Estado_reservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado_reservas = [
            'Confirmada',
            'Pendiente',
            'Cancelada'
        ];

        foreach ($estado_reservas as $estado_reserva) {
            Estado_reserva::create([
                'nombre'=>$estado_reserva
            ]);
        }
    }
}
