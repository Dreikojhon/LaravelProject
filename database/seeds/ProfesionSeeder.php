<?php

use \App\Profesion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::insert('INSERT INTO profesions (title) VALUES (:title)', [
//            'title' => 'Desarrollador back-end',
//        ]);

        Profesion::create([
            'title' =>'Desarrollador Back-End',
        ]);

        Profesion::create([
            'title' =>'Desarrollador Front-End',
        ]);

        Profesion::create([
            'title' => 'Diseñador web',
        ]);
            
        //factory(Profesion::class)->times(10)->create();
        factory(Profesion::class,10)->create();
    }
}