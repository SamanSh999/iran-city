<?php

namespace SamanSh999\IranCity\app\Http\Controllers;

use App\Http\Controllers\Controller;
use SamanSh999\IranCity\app\Models\IranCity;
use Illuminate\Http\Request;

class IranCityController extends Controller
{
    public function get_all_provinces(){
    	$provinces = IranCity::where('type', 'استان')->get();
    	return compact('provinces');
    }
}
