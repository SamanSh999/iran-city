<?php

namespace SamanSh999\IranCity\Database\Seeds;

use Illuminate\Database\Seeder;
use SamanSh999\IranCity\app\Models\IranCity;

class IranCitySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run(){

        $section = [

        ];

        foreach (array_chunk($section, 500) as $set){
            IranCity::insert($set);
        }

    }
}
