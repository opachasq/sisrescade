<?php

namespace Database\Seeders;

use App\Models\Hora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horas = [
            '07:00 am',
            '08:00 am',
            '08:30 am',
            '09:00 am',
            '09:30 am',
            '10:00 am',
            '10:30 am',
            '11:00 am',
            '11:30 am',
            '12:00 m',
            '12:20 pm',
            '01:00 pm',
            '01:30 pm',
            '02:00 pm',
            '02:30 pm',
            '03:00 pm',
            '03:30 pm',
            '04:00 pm',
            '03:30 pm',
            '04:00 pm',
            '04:30 pm',
            '05:00 pm',
            '05:30 pm',
            '06:00 pm',
            '06:30 pm',
            '07:00 pm',
            '07:30 pm',
            '08:00 pm',
            '08:30 pm',
            '09:00 pm',
            '09:30 pm',
            '10:00 pm',
            '10:30 pm'


        ];

        foreach ($horas as $hora) {
            Hora::create([
                'nombre'=>$hora
            ]);
        }
    }
}
