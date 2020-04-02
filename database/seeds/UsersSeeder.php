<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Janailton Galvão Pereia',
            'email'  => 'janailton.galvao@lais.huol.ufrn.br',
            'cpf'  => '11100033300',
            'password'  => bcrypt('123456'),
        ]);
    }
}
