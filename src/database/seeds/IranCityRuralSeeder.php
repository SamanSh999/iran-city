<?php

namespace SamanSh999\IranCity\Database\Seeds;

use Illuminate\Database\Seeder;
use SamanSh999\IranCity\app\Models\IranCity;

class IranCityRuralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run(){

        $rural = [

        ];

        foreach (array_chunk($rural, 500) as $set){
            IranCity::insert($set);
        }

    }
}
