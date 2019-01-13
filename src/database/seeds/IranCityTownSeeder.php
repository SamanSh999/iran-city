<?php

namespace SamanSh999\IranCity\Database\Seeds;

use Illuminate\Database\Seeder;
use SamanSh999\IranCity\app\Models\IranCity;

class IranCityTownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run(){

        $town = [

        ];

        foreach (array_chunk($town, 500) as $set){
            IranCity::insert($set);
        }

    }
}
