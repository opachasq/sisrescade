<?php

namespace Database\Seeders;

use App\Models\Estado_pago;
use Illuminate\Database\Seeder;

class Estado_PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado_pagos = [
            'Completo',
            'Pendiente'
        ];

        foreach ($estado_pagos as $estado_pago) {
            Estado_pago::create([
                'nombre'=>$estado_pago
            ]);
        }
    }
}
