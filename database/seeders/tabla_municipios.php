<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_municipios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var[1] = 'Ecatepec de Morelos';
        $var[2] = 'Nezahualcóyotl';
        $var[3] = 'Toluca';
        $var[4] = 'Naucalpan de Juárez';
        $var[5] = 'Chimalhuacán';
        $var[6] = 'Tecámac';
        $var[7] = 'Tlalnepantla de Baz';
        $var[8] = 'Ixtapaluca';
        $var[9] = 'Cuautitlán Izcalli';
        $var[10] = 'Tultitlán';
        $var[11] = 'Atizapán de Zaragoza';
        $var[12] = 'Nicolás Romero';
        $var[13] = 'La Paz';
        $var[14] = 'Zumpango';
        $var[15] = 'Texcoco';
        $var[16] = 'Coacalco de Berriozábal';
        $var[17] = 'Huixquilucan';

        for ($i = 1; $i <= 17; $i++) {
            \DB::table('municipios')->insert([
                'id_entidad' => 15,
                'nombre' => $var[$i],
                'status' => 1,
            ]);
        }
    }
}