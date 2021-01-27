<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('products')->truncate();  //Products tablosundaki tüm verileri siler.
        $title = Str::random(10).' '.Str::random(10);
        DB::table("products")->insert([
            'title'=> Str::title($title),
            'slug'=> Str::slug($title),
            'content'=>'lorem ipsum dolor sit amet',
            'price'=>rand(10,1000)/10,
            'stock'=>rand(10,10000)
        ]);
    }
}
