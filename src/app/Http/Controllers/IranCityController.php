<?php

namespace SamanSh999\IranCity\App\Http\Controllers;

use App\Http\Controllers\Controller;
use SamanSh999\IranCity\App\Models\IranCity;

class IranCityController extends Controller
{
    public function find_fast($parent_id)
    {
        $provinces = IranCity::where('parent_id', $parent_id)->get();

//        return response()->json( ($provinces));
        return response()->json( $provinces, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function all_provinces()
    {
        $provinces = IranCity::where('type', 'استان')->get();

//        return response()->json( ($provinces));
        return response()->json( $provinces, 200, [], JSON_UNESCAPED_UNICODE);
    }
//    public function get_province($id){
//    	$provinces = IranCity::where('type', 'استان')->where('id', $id)->first();
//
//    	return response()->json($provinces);
//    }
//    public function find_provinces($name){
//    	$provinces = IranCity::where('type', 'استان')->where('name', $name)->get();
//
//    	return response()->json($provinces);
//    }
//    public function find_province($name){
//    	$provinces = IranCity::where('type', 'استان')->where('name', $name)->first();
//
//    	return response()->json($provinces);
//    }

    public function province_cities($province_id)
    {
        $cities = IranCity::where('type', 'شهرستان')->where('parent_id', $province_id)->get();
        return response()->json($cities, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function city_sections($city_id)
    {
        $sections = IranCity::where('type', 'بخش')->where('parent_id', $city_id)->get();
        return response()->json($sections, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function section_towns($section_id)
    {
        $towns = IranCity::where('type', 'شهر')->where('parent_id', $section_id)->get();
        return response()->json($towns, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function section_rurals($section_id)
    {
        $rurals = IranCity::where('type', 'دهستان')->where('parent_id', $section_id)->get();
        return response()->json($rurals, 200, [], JSON_UNESCAPED_UNICODE);
    }
    //todo ::
//    public function rural_village($rural_id)
//    {
//        $villages = IranCity::where('type', 'آبادی')->where('parent_id', $rural_id)->get();
//        return response()->json($villages, 200, [], JSON_UNESCAPED_UNICODE);
//    }
}
