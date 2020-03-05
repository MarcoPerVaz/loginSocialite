<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*  */
            /* Crea 1 usuario */
            factory(\App\User::class, 1)->create([
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('123456'),
            ]);

            /* Crea 50 usuarios */
            factory(\App\User::class, 50)->create();
       /*  */
    }
}
