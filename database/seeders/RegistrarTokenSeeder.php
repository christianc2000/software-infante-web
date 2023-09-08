<?php

namespace Database\Seeders;

use App\Models\RegistrarToken;
use Illuminate\Database\Seeder;

class RegistrarTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegistrarToken::create([
            'expo_token' => 'ExponentPushToken[ASVfg8OUgLXWqOrxcyWO-E]',
            'user_id' => 1
        ]);
        RegistrarToken::create([
            'expo_token' => 'ExponentPushToken[ASVfg8OUgLXWqOrxcyWO-E]',
            'user_id' => 4
        ]);
    }
}
