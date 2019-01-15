<?php

namespace SamanSh999\IranCity\Database\Seeds;

use Illuminate\Database\Seeder;
use SamanSh999\IranCity\app\Models\IranCity;

class IranCityVillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run(){

        //todo :: all village count : ~97000 :(
        $village = [

        ];

        foreach (array_chunk($village, 250) as $set){
            IranCity::insert($set);
        }

    }
}
