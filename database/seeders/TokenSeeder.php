<?php

namespace Database\Seeders;

use App\Models\Token;
use Illuminate\Database\Seeder;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tokens = [
            [
                'codigo' => "11111",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "1",
                'id_tutor' => "1"
            ],
            [
                'codigo' => "22222",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "2",
                'id_tutor' => "1"
            ],
            [
                'codigo' => "333333",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "3",
                'id_tutor' => "1"
            ],
            [
                'codigo' => "444444",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "4",
                'id_tutor' => "1"
            ],
            [
                'codigo' => "5555555",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "5",
                'id_tutor' => "2"
            ],
            [
                'codigo' => "111100000",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "6",
                'id_tutor' => "6"
            ],
            [
                'codigo' => "66666",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "7",
                'id_tutor' => "6"
            ],
            [
                'codigo' => "7777",
                'fecha_creacion' => "2000/01/04",
                'estado' => "1",
                'fecha_registro' =>"2000/01/04",
                'id_hijo' => "8",
                'id_tutor' => "6"
            ],
           
           
        ];
        foreach ($tokens as $token) {
            Token::create($token);
        }
        /*$tokens = token::all();
        $admins = $tokens->where('tipo', 'A');
        $tutors = $tokens->where('tipo', 'T');
        $hijos = $tokens->where('tipo', 'H');
        $c = 0;
        foreach ($admins as $admin) {
            Administrativo::create(['token_id' => $admin->id]);
        }

        Tutor::create([
            'token_id' => $tutors->first()->id,
        ]);

        Hijo::create([
            'alias' => 'sarita',
            'edad' => 18,
            'token_id' => $hijos->first()->id,
            'tutor_id' => 1
        ]);
        Hijo::create([
            'alias' => 'joss',
            'edad' => 18,
            'token_id' => $hijos->last()->id,
            'tutor_id' => 1
        ]);*/
    }
}
