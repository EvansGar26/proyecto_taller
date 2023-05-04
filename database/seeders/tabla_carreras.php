<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_carreras extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var[1] = 'Ingeniería Electromécanica';
        $var[2] = 'IngenieríaBaja Electrónica';
        $var[3] = 'IngenieríaBaja en Gestión Empresarial';
        $var[4] = 'Ingeniería Industrial';
        $var[5] = 'Ingeniería en Logística';
        $var[6] = 'Ingeniería Mecatrónica';
        $var[7] = 'Ingeniería Química';
        $var[8] = 'Ingeniería en Tecnologías de la Información y Comunicaciones';

        for ($i = 1; $i <= 8; $i++) {
            \DB::table('carreras')->insert([
                'nombre' => $var[$i],
                'objetivo' => ' ',
                'descripcion' => ' ',
                'perfil_ingreso' => ' ',
                'perfil_egreso' => ' ',
                'campo_laboral' => ' ',
                'status' => 1,
                'tipo' => 1,
            ]);
        }
    }
}