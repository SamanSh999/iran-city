<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use SamanSh999\IranCity\Database\Seeds\IranCityCitySeeder;
use SamanSh999\IranCity\Database\Seeds\IranCityProvinceSeeder;
use SamanSh999\IranCity\Database\Seeds\IranCityRuralSeeder;
use SamanSh999\IranCity\Database\Seeds\IranCitySectionSeeder;
use SamanSh999\IranCity\Database\Seeds\IranCityTownSeeder;

class CreateIranCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('iran_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->nestedSet();
        });

        IranCityProvinceSeeder::run();
        IranCityCitySeeder::run();
        IranCitySectionSeeder::run();
        IranCityRuralSeeder::run();
        IranCityTownSeeder::run();
//        todo ::
//        IranCityVillageSeeder::run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iran_cities');
    }
}
