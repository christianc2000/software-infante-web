<?php

namespace Database\Seeders;

use App\Models\Hijo\Hijo;
use Illuminate\Database\Seeder;

class hijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hijos = [
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'id_tutor' =>'1',
            ],
            [
                'name' =>'Fabricio',
                'apellido' => 'Espinoza',
                'celular' => '8965414',
                'alias' => 'fabrichito',
                'id_tutor' =>'1',
            ],
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'id_tutor' =>'1',
            ],
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'id_tutor' =>'1',
            ],
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'id_tutor' =>'2',
            ],
            [
                'name' =>'Miguel Angel',
                'apellido' => 'Escobar Robledo',
                'celular' => '32457869',
                'alias' => 'angelito',
                'id_tutor' =>'6',
            ],
            [
                'name' =>' Fernando Fabricio',
                'apellido' => 'Espinoza Raiz',
                'celular' => '8965414',
                'alias' => 'fabrichito',
                'id_tutor' =>'6',
            ],
            [
                'name' =>'Humberto',
                'apellido' => 'Ricaldes',
                'celular' => '32457869',
                'alias' => 'humbertito',
                'id_tutor' =>'6',
            ],
            [
                'name' =>'Horlando',
                'apellido' => 'Humeres',
                'celular' => '32457869',
                'alias' => 'horlandito',
                'id_tutor' =>'6',
            ],
            [
                'name' =>'Raul',
                'apellido' => 'Celaya',
                'celular' => '32457869',
                'alias' => 'raulito',
                'id_tutor' =>'6',
            ],
        ];
        foreach ($hijos as $hijo) {
            Hijo::create($hijo);
        }
    }
}
