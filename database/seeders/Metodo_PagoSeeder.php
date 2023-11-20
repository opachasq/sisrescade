<?php

namespace Database\Seeders;

use App\Models\Metodo_pago;
use Illuminate\Database\Seeder;

class Metodo_PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metodo_pagos = [
            'Efectivo',
            'Tarjeta de Crédito',
            'Transferencia',
            'Yape'
        ];

        foreach ($metodo_pagos as $metodo_pago) {
            Metodo_pago::create([
                'nombre'=>$metodo_pago
            ]);
        }
    }
}
