<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::truncate();
        foreach(range(1,5) as $loop){
            Vehiculo::create([
               'modelo'=>"Modelo".$loop,
               'peso'=>"33".$loop,
               'color'=>"Color".$loop,
               'itv_pasada'=>true,
           ]);
        }
    }
}
