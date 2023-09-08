<?php

namespace Database\Seeders;

use App\Models\Contenido\Contenido;
use Illuminate\Database\Seeder;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contenidos = [
            [
                'fecha'=>'2015-11-01 09:00:00',
                'path'=>'images/captura/image1.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>6,
            ],
            [
                'fecha'=>'2015-11-01 10:00:00',
                'path'=>'s3://parentcontrol/img2.jpg',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>6,
            ],
            [
                'fecha'=>'2015-11-01 10:10:00',
                'path'=>'images/captura/image3.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>6,
            ],
            [
                'fecha'=>'2015-11-01 09:00:00',
                'path'=>'images/captura/image1.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>6,
            ],
            [
                'fecha'=>'2015-11-01 10:00:00',
                'path'=>'s3://parentcontrol/img2.jpg',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>6,
            ],
            [
                'fecha'=>'2015-11-01 10:10:00',
                'path'=>'images/captura/image3.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>6,
            ],
            [
                'fecha'=>'2015-11-01 09:00:00',
                'path'=>'images/captura/image1.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>7,
            ],
            [
                'fecha'=>'2015-11-01 10:00:00',
                'path'=>'s3://parentcontrol/img2.jpg',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>7,
            ],
            [
                'fecha'=>'2015-11-01 10:10:00',
                'path'=>'images/captura/image3.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>8,
            ],
            [
                'fecha'=>'2015-11-01 09:00:00',
                'path'=>'images/captura/image1.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>8,
            ],
            [
                'fecha'=>'2015-11-01 10:00:00',
                'path'=>'s3://parentcontrol/img2.jpg',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>7,
            ],
            [
                'fecha'=>'2015-11-01 10:10:00',
                'path'=>'images/captura/image3.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>8,
            ],
            [
                'fecha'=>'2015-11-01 09:00:00',
                'path'=>'images/captura/image1.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>9,
            ],
            [
                'fecha'=>'2015-11-01 10:00:00',
                'path'=>'s3://parentcontrol/img2.jpg',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>9,
            ],
            [
                'fecha'=>'2015-11-01 10:10:00',
                'path'=>'images/captura/image3.png',
                'url'=>'infante/yv6bzQ7FawQ6nYevcBv8O5dyb9CjoG9hh0bH6eTB.jpg',
                'tipo_contenido'=>'Rude Gestures','contenido'=>'Sexual Situations',
                'hijo_id'=>7,
            ],
        ];
        foreach ($contenidos as $contenido) {
            Contenido::create($contenido);
        }
    }
}
