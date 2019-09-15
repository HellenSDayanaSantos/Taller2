<?php

use Illuminate\Database\Seeder;

class LaboratorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $laboratorios = factory(App\Models\Laboratorio::class, 3)
       ->create()
       ->each(function($laboratorio){
           
             $laboratorio->farmacos()->save(factory(App\Models\Farmaco::class)->make());
                   
       });
    }
}
