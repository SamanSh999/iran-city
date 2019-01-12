<?php
/*
En : Province
Fa : Ostan
*/
//Route::get('get-province', 'JunkController@test');
Route::namespace('SamanSh999\IranCity\app\Http\Controllers')
    ->prefix('iran-city')->as('iran-city.')
    ->group(function () {
        Route::get('get-provinces', 'IranCityController@get_all_provinces');
    });
/*
En : City
Fa : Shahrestan
*/


/*
En : Section
Fa : Bakhsh
*/

/*
En : Rural
Fa : Dehastan
*/

/*
En : Town
Fa : Shahr / Markaz / Mantageh
*/

/*
En : Village
Fa : Rosta / Deh
*/
