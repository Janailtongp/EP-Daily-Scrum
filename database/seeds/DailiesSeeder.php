<?php

use Illuminate\Database\Seeder;
use App\Daily;
use App\User;

class DailiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daily::create([
            'first_answer' => 'Fiz o BD do HERA',
            'second_answer' => 'Farei as Controllers do HAIMA.',
            'third_answer' => 'A quarentena.',
            'user_id' => User::all()->random()->id,
        ]);
    }
}
