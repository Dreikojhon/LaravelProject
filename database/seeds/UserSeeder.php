<?php

use \App\User;
use \App\Profesion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$profesions = DB::select('SELECT id FROM profesions WHERE title = ?', ['Desarrollador back-end']);
        $profesionId = Profesion::where('title', 'Desarrollador back-end')->value('id');
        
        factory(User::class)->create([
            //'name' => 'Test Name',
            'email' => 'test@styde.net',
            'password' => bcrypt('laravel'),
            'profesion_id' => $profesionId,
            'is_admin' =>true
        ]);

        //factory con profesion
        factory(User::class)->create([
            'profesion_id'=> $profesionId,
        ]);
        //factory sin profesion
        factory(User::class,48)->create();
    }
}

