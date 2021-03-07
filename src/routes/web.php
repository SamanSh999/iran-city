<?php

//Route::get('get-province', 'JunkController@test');
Route::namespace('SamanSh999\IranCity\App\Http\Controllers')
    ->prefix('iran-city')->as('iran-city.')
    ->group(function () {

        Route::get('find-child/{parent_id}', 'IranCityController@find_fast');

        /**
         * En : Province
         * Fa : Ostan
         */
        Route::get('all-provinces', 'IranCityController@all_provinces');
        //todo ::
//        Route::get('get-province/{id}', 'IranCityController@get_province');
//        Route::get('find-province/{name}', 'IranCityController@find_province');
//        Route::get('find-provinces/{name}', 'IranCityController@find_provinces');

        /**
         * En : City
         * Fa : Shahrestan
         */
        Route::get('province-cities/{province_id}', 'IranCityController@province_cities');

        /**
         * En : Section
         * Fa : Bakhsh
         */
        Route::get('city-sections/{city_id}', 'IranCityController@city_sections');

        /**
         * En : Town
         * Fa : Shahr / Markaz / Mantageh
         */
        Route::get('section-towns/{section_id}', 'IranCityController@section_towns');

        /**
         * En : Rural
         * Fa : Dehastan
         */
        Route::get('section-rurals/{section_id}', 'IranCityController@section_rurals');

        /**
         * En : Village
         * Fa : Rosta / Deh
         */
        //todo ::
//        Route::get('rural-villages/{rural_id}', 'IranCityController@rural_villages');

    });

