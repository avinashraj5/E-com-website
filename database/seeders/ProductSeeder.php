<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                    'name'=>'Oppo mobile',
                    "price"=>"300",
                    "description"=>"A smartphone with 8gb ram and much more features",
                    "category"=>"mobile",
                    "gallery"=>"https://cdn1.smartprix.com/rx-i8WMlJChR-w1200-h1200/8WMlJChR.jpg"
            ],
            [
                'name'=>'Panasonic TV',
                    "price"=>"200",
                    "description"=>"A smart tv with much more features",
                    "category"=>"tv",
                    "gallery"=>"https://cdn1.smartprix.com/rx-i2V3Foyvn-w1200-h1200/2V3Foyvn.jpg"
            ],
            [
                'name'=>'Soni TV',
                    "price"=>"500",
                    "description"=>"A tv with much more features",
                    "category"=>"tv",
                    "gallery"=>"https://m.media-amazon.com/images/I/71Q24PwtvaL._AC_UF1000,1000_QL80_.jpg"
            ],
            [
                'name'=>'LG fridge',
                    "price"=>"700",
                    "description"=>"A fridge with much more features",
                    "category"=>"fridge",
                    "gallery"=>"https://www.lg.com/in/images/refrigerators/md07547068/gallery/GL-T422VPZX-Refrigerators-Back-View-D01.jpg"
            ]
        ]);
    }
}
