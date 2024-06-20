<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = [
            [1, 'Presidente'],
            [2, 'Vice-Presidente'],
            [3, 'Tesoureiro'],
            [4, 'Vice-tesoureiro'],
            [5, 'Secretário'],
            [6, 'Vice-secretário']
        ];

        foreach ($cargos as $cargo) {
            DB::table('cargos')->insert([
                'id' => $cargo[0],
                'nome' => $cargo[1],
            ]);
        }
    }
}