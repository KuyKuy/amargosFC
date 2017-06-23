<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ClubTableSeeder extends Seeder {

    public function run()
    {
        DB::table('clubs')->insert([
            'nombre' => str_random(10),
            'categoria' => str_random(5),
            'ubicacion' => str_random(5),
            'fechaNacimiento' => '2016-12-31',
            'biografia' => str_random(1024),
        ]);
        // TestDummy::times(20)->create('App\Post');
    }

}
