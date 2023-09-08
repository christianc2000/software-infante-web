<?php

namespace Database\Seeders;

use App\Models\Llamada\Llamada;
use Illuminate\Database\Seeder;

class LlamadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $llamadas = [
            [
               'aceptada' =>true,
                 'fecha' =>  '2015-11-01 14:10:00',
                'tiempo' => '00:00:45',
                'contacto_id' => 1,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-11-02 19:30:00',
                'tiempo' => '00:00:00',
                'contacto_id' => 2,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>true,
                'fecha' =>  '2015-12-20 11:08:21',
                'tiempo' => '00:02:45',
                'contacto_id' => 3,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-12-18 13:12:00',
                'tiempo' => '00:01:45',
                'contacto_id' => 4,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-12-22 08:10:00',
                'tiempo' => '00:00:00',
                'contacto_id' => 5,
                'hijo_id' => 6,
            ],[
               'aceptada' =>true,
                 'fecha' =>  '2015-11-01 14:10:00',
                'tiempo' => '00:00:45',
                'contacto_id' => 6,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-11-01 19:30:00',
                'tiempo' => '00:00:00',
                'contacto_id' => 7,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>true,
                'fecha' =>  '2015-12-01 11:08:21',
                'tiempo' => '00:02:45',
                'contacto_id' => 8,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-12-16 13:12:00',
                'tiempo' => '00:01:45',
                'contacto_id' => 9,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-12-21 08:10:00',
                'tiempo' => '00:00:00',
                'contacto_id' => 10,
                'hijo_id' => 6,
            ],
            [
                'aceptada' =>true,
                  'fecha' =>  '2015-11-01 14:10:00',
                 'tiempo' => '00:00:45',
                 'contacto_id' => 11,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-11-01 19:30:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 12,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>true,
                 'fecha' =>  '2015-12-01 11:08:21',
                 'tiempo' => '00:02:45',
                 'contacto_id' => 13,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-16 13:12:00',
                 'tiempo' => '00:01:45',
                 'contacto_id' => 14,
                 'hijo_id' => 8,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-21 08:10:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 15,
                 'hijo_id' => 9,
             ],
             [
                'aceptada' =>true,
                  'fecha' =>  '2015-11-01 14:10:00',
                 'tiempo' => '00:00:45',
                 'contacto_id' => 16,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-11-01 19:30:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 17,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>true,
                 'fecha' =>  '2015-12-01 11:08:21',
                 'tiempo' => '00:02:45',
                 'contacto_id' => 18,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-16 13:12:00',
                 'tiempo' => '00:01:45',
                 'contacto_id' => 19,
                 'hijo_id' => 7,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-21 08:10:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 20,
                 'hijo_id' => 7,
             ],
             [
                'aceptada' =>true,
                  'fecha' =>  '2015-11-01 14:10:00',
                 'tiempo' => '00:00:45',
                 'contacto_id' => 21,
                 'hijo_id' => 8,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-11-01 19:30:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 22,
                 'hijo_id' => 8,
             ],
             [
                 'aceptada' =>true,
                 'fecha' =>  '2015-12-01 11:08:21',
                 'tiempo' => '00:02:45',
                 'contacto_id' => 23,
                 'hijo_id' => 8,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-16 13:12:00',
                 'tiempo' => '00:01:45',
                 'contacto_id' => 24,
                 'hijo_id' => 8,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-21 08:10:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 25,
                 'hijo_id' => 8,
             ],
             [
                'aceptada' =>true,
                  'fecha' =>  '2015-11-01 14:10:00',
                 'tiempo' => '00:00:45',
                 'contacto_id' => 26,
                 'hijo_id' => 8,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-11-01 19:30:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 27,
                 'hijo_id' => 9,
             ],
             [
                 'aceptada' =>true,
                 'fecha' =>  '2015-12-01 11:08:21',
                 'tiempo' => '00:02:45',
                 'contacto_id' => 28,
                 'hijo_id' => 9,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-16 13:12:00',
                 'tiempo' => '00:01:45',
                 'contacto_id' => 29,
                 'hijo_id' => 9,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-21 08:10:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 30,
                 'hijo_id' => 9,
             ],
             [
                'aceptada' =>true,
                  'fecha' =>  '2015-11-01 14:10:00',
                 'tiempo' => '00:00:45',
                 'contacto_id' => 31,
                 'hijo_id' => 9,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-11-01 19:30:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 20,
                 'hijo_id' => 9,
             ],
             [
                 'aceptada' =>true,
                 'fecha' =>  '2015-12-01 11:08:21',
                 'tiempo' => '00:02:45',
                 'contacto_id' => 22,
                 'hijo_id' => 9,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-16 13:12:00',
                 'tiempo' => '00:01:45',
                 'contacto_id' => 24,
                 'hijo_id' => 10,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-21 08:10:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 25,
                 'hijo_id' => 10,
             ],
             [
                'aceptada' =>true,
                  'fecha' =>  '2015-11-01 14:10:00',
                 'tiempo' => '00:00:45',
                 'contacto_id' => 26,
                 'hijo_id' => 10,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-11-01 19:30:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 27,
                 'hijo_id' => 10,
             ],
             [
                 'aceptada' =>true,
                 'fecha' =>  '2015-12-01 11:08:21',
                 'tiempo' => '00:02:45',
                 'contacto_id' => 28,
                 'hijo_id' => 10,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-16 13:12:00',
                 'tiempo' => '00:01:45',
                 'contacto_id' => 29,
                 'hijo_id' => 10,
             ],
             [
                 'aceptada' =>false,
                 'fecha' =>  '2015-12-21 08:10:00',
                 'tiempo' => '00:00:00',
                 'contacto_id' => 30,
                 'hijo_id' => 10,
             ]
        ];
        foreach ($llamadas as $llamada) {
            Llamada::create($llamada);
        }
    }
}
