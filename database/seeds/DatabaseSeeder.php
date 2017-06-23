<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'admin@amargos.com.ar',
            'password' => bcrypt('admin'),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
