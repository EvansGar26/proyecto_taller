<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var[1] = 'Administrador';
        $var[2] = 'Docentes';
        $var[3] = 'Alumnos';

        for ($i = 1; $i <= 3; $i++) {
            \DB::table('roles')->insert([
                'nombre' => $var[$i],
                'nivel' => $i,
                'status' => 1,
            ]);
        }
    }
}