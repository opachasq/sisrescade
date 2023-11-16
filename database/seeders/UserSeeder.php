<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Dayvid Pachas Quenhua',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
