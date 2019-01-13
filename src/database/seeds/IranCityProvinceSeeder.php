<?php

namespace SamanSh999\IranCity\Database\Seeds;

use Illuminate\Database\Seeder;
use SamanSh999\IranCity\app\Models\IranCity;

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
            ['id' => 4, 'type' => "استان", 'name' => "آذربايجان شرقي", '_lft' => "17485", '_rgt' => "24200", 'parent_id' => null,],
            ['id' => 5, 'type' => "استان", 'name' => "آذربايجان غربي", '_lft' => "24201", '_rgt' => "31968", 'parent_id' => null,],
            ['id' => 6, 'type' => "استان", 'name' => "کرمانشاه", '_lft' => "31969", '_rgt' => "38616", 'parent_id' => null,],
            ['id' => 7, 'type' => "استان", 'name' => "خوزستان", '_lft' => "38617", '_rgt' => "52202", 'parent_id' => null,],
            ['id' => 8, 'type' => "استان", 'name' => "فارس", '_lft' => "52203", '_rgt' => "69844", 'parent_id' => null,],
            ['id' => 9, 'type' => "استان", 'name' => "كرمان", '_lft' => "69845", '_rgt' => "94000", 'parent_id' => null,],
            ['id' => 10, 'type' => "استان", 'name' => "خراسان رضوئ", '_lft' => "17015", '_rgt' => "17720", 'parent_id' => null,],
            ['id' => 11, 'type' => "استان", 'name' => "اصفهان", '_lft' => "17721", '_rgt' => "18368", 'parent_id' => null,],
            ['id' => 12, 'type' => "استان", 'name' => "سيستان وبلوچستان", '_lft' => "18369", '_rgt' => "18812", 'parent_id' => null,],
            ['id' => 13, 'type' => "استان", 'name' => "كردستان", '_lft' => "18813", '_rgt' => "19132", 'parent_id' => null,],
            ['id' => 14, 'type' => "استان", 'name' => "همدان", '_lft' => "19133", '_rgt' => "19418", 'parent_id' => null,],
            ['id' => 15, 'type' => "استان", 'name' => "چهارمحال وبختيارئ", '_lft' => "19419", '_rgt' => "19668", 'parent_id' => null,],
            ['id' => 16, 'type' => "استان", 'name' => "لرستان", '_lft' => "19669", '_rgt' => "19988", 'parent_id' => null,],
            ['id' => 17, 'type' => "استان", 'name' => "ايلام", '_lft' => "19989", '_rgt' => "20210", 'parent_id' => null,],
            ['id' => 18, 'type' => "استان", 'name' => "كهگيلويه وبويراحمد", '_lft' => "20211", '_rgt' => "20390", 'parent_id' => null,],
            ['id' => 19, 'type' => "استان", 'name' => "بوشهر", '_lft' => "20391", '_rgt' => "20636", 'parent_id' => null,],
            ['id' => 20, 'type' => "استان", 'name' => "زنجان", '_lft' => "20637", '_rgt' => "20832", 'parent_id' => null,],
            ['id' => 21, 'type' => "استان", 'name' => "سمنان", '_lft' => "20833", '_rgt' => "20982", 'parent_id' => null,],
            ['id' => 22, 'type' => "استان", 'name' => "يزد", '_lft' => "20983", '_rgt' => "21184", 'parent_id' => null,],
            ['id' => 23, 'type' => "استان", 'name' => "هرمزگان", '_lft' => "21185", '_rgt' => "21542", 'parent_id' => null,],
            ['id' => 24, 'type' => "استان", 'name' => "تهران", '_lft' => "21543", '_rgt' => "21928", 'parent_id' => null,],
            ['id' => 25, 'type' => "استان", 'name' => "اردبيل", '_lft' => "21929", '_rgt' => "22212", 'parent_id' => null,],
            ['id' => 26, 'type' => "استان", 'name' => "قم", '_lft' => "22213", '_rgt' => "22272", 'parent_id' => null,],
            ['id' => 27, 'type' => "استان", 'name' => "قزوين", '_lft' => "22273", '_rgt' => "22474", 'parent_id' => null,],
            ['id' => 28, 'type' => "استان", 'name' => "گلستان", '_lft' => "22475", '_rgt' => "22744", 'parent_id' => null,],
            ['id' => 29, 'type' => "استان", 'name' => "خراسان شمالي", '_lft' => "22745", '_rgt' => "22938", 'parent_id' => null,],
            ['id' => 30, 'type' => "استان", 'name' => "خراسان جنوبي", '_lft' => "22939", '_rgt' => "23194", 'parent_id' => null,],
            ['id' => 31, 'type' => "استان", 'name' => "البرز", '_lft' => "23195", '_rgt' => "23348", 'parent_id' => null]
        ];

        IranCity::insert($province);
    }
}
