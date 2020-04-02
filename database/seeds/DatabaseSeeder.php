<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Daily;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call([
            UsersSeeder::class,
            DailiesSeeder::class,
            ]);
        
       // factory(User::class, 5)->create();
       // factory(Daily::class, 15)->create();
    }
}
