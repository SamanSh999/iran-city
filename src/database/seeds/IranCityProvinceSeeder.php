<?php

namespace SamanSh999\IranCity\Database\Seeds;

use Illuminate\Database\Seeder;
use SamanSh999\IranCity\App\Models\IranCity;

class IranCityProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run()
    {
        $province = [
            ['id' => 1, 'type' => "استان", 'name' => "مرکزي", '_lft' => "1", '_rgt' => "3454", 'parent_id' => null,],
            ['id' => 2, 'type' => "استان", 'name' => "گيلان", '_lft' => "3455", '_rgt' => "9722", 'parent_id' => null,],
            ['id' => 3, 'type' => "استان", 'name' => "مازندران", '_lft' => "9723", '_rgt' => "17484", 'parent_id' => null,],
            ['id' => 4, 'type' => "استان", 'name' => "آذربايجان شرقي", '_lft' => "70827", '_rgt' => "77542", 'parent_id' => null,],
            ['id' => 5, 'type' => "استان", 'name' => "آذربايجان غربي", '_lft' => "56411", '_rgt' => "64178", 'parent_id' => null,],
            ['id' => 6, 'type' => "استان", 'name' => "کرمانشاه", '_lft' => "64179", '_rgt' => "70826", 'parent_id' => null,],
            ['id' => 7, 'type' => "استان", 'name' => "خوزستان", '_lft' => "77543", '_rgt' => "91128", 'parent_id' => null,],
            ['id' => 8, 'type' => "استان", 'name' => "فارس", '_lft' => "119161", '_rgt' => "136802", 'parent_id' => null,],
            ['id' => 9, 'type' => "استان", 'name' => "كرمان", '_lft' => "140903", '_rgt' => "165058", 'parent_id' => null,],
            ['id' => 10, 'type' => "استان", 'name' => "خراسان رضوئ", '_lft' => "17485", '_rgt' => "32974", 'parent_id' => null,],
            ['id' => 11, 'type' => "استان", 'name' => "اصفهان", '_lft' => "91129", '_rgt' => "98786", 'parent_id' => null,],
            ['id' => 12, 'type' => "استان", 'name' => "سيستان وبلوچستان", '_lft' => "98787", '_rgt' => "119160", 'parent_id' => null,],
            ['id' => 13, 'type' => "استان", 'name' => "كردستان", '_lft' => "136803", '_rgt' => "140902", 'parent_id' => null,],
            ['id' => 14, 'type' => "استان", 'name' => "همدان", '_lft' => "165059", '_rgt' => "167760", 'parent_id' => null,],
            ['id' => 15, 'type' => "استان", 'name' => "چهارمحال وبختيارئ", '_lft' => "167761", '_rgt' => "169990", 'parent_id' => null,],
            ['id' => 16, 'type' => "استان", 'name' => "لرستان", '_lft' => "169991", '_rgt' => "177210", 'parent_id' => null,],
            ['id' => 17, 'type' => "استان", 'name' => "ايلام", '_lft' => "177211", '_rgt' => "179666", 'parent_id' => null,],
            ['id' => 18, 'type' => "استان", 'name' => "كهگيلويه وبويراحمد", '_lft' => "179667", '_rgt' => "184372", 'parent_id' => null,],
            ['id' => 19, 'type' => "استان", 'name' => "بوشهر", '_lft' => "184373", '_rgt' => "186344", 'parent_id' => null,],
            ['id' => 20, 'type' => "استان", 'name' => "زنجان", '_lft' => "186345", '_rgt' => "188938", 'parent_id' => null,],
            ['id' => 21, 'type' => "استان", 'name' => "سمنان", '_lft' => "188939", '_rgt' => "193528", 'parent_id' => null,],
            ['id' => 22, 'type' => "استان", 'name' => "يزد", '_lft' => "193529", '_rgt' => "201640", 'parent_id' => null,],
            ['id' => 23, 'type' => "استان", 'name' => "هرمزگان", '_lft' => "201641", '_rgt' => "206544", 'parent_id' => null,],
            ['id' => 24, 'type' => "استان", 'name' => "تهران", '_lft' => "32975", '_rgt' => "35454", 'parent_id' => null,],
            ['id' => 25, 'type' => "استان", 'name' => "اردبيل", '_lft' => "35455", '_rgt' => "39454", 'parent_id' => null,],
            ['id' => 26, 'type' => "استان", 'name' => "قم", '_lft' => "39455", '_rgt' => "40234", 'parent_id' => null,],
            ['id' => 27, 'type' => "استان", 'name' => "قزوين", '_lft' => "40235", '_rgt' => "42746", 'parent_id' => null,],
            ['id' => 28, 'type' => "استان", 'name' => "گلستان", '_lft' => "42747", '_rgt' => "45118", 'parent_id' => null,],
            ['id' => 29, 'type' => "استان", 'name' => "خراسان شمالي", '_lft' => "45119", '_rgt' => "47912", 'parent_id' => null,],
            ['id' => 30, 'type' => "استان", 'name' => "خراسان جنوبي", '_lft' => "47913", '_rgt' => "55310", 'parent_id' => null,],
            ['id' => 31, 'type' => "استان", 'name' => "البرز", '_lft' => "55311", '_rgt' => "56410", 'parent_id' => null,],
        ];

        IranCity::insert($province);
    }
}
