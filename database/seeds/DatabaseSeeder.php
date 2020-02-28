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
        // $this->call(UsersTableSeeder::class);
        DB::table('usuarios')->insert([
            'name' => 'Johan',
            'lastname' => 'Rincon',
            'email' => 'johan@gmail.com',
            'rut' => '267162832',
        ]);
        DB::table('usuarios')->insert([
            'name' => 'Carlos',
            'lastname' => 'Castillo',
            'email' => 'carlos@gmail.com',
            'rut' => '257162382',
        ]);
        DB::table('usuarios')->insert([
            'name' => 'Javier',
            'lastname' => 'Vargas',
            'email' => 'javier@gmail.com',
            'rut' => '234565673',
        ]);
    }
}
