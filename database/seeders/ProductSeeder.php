<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Looping dulu ges
        $data = file_get_contents('https://dummyjson.com/products?limit=100');
        $myData = json_decode($data);
        $dataMap = $myData->products;
        foreach ($dataMap as $data_api => $item) {
            DB::table('products')->insert([
                'title'=> $item->title,
                'description'=>  $item->description,
                'price'=> $item->price,
                'discountPercentage'=> $item->discountPercentage,
                'rating'=> $item->rating,
                'stock'=> $item->stock,
                'brand'=> $item->brand,
                'category'=> $item->category,
                'thumbnail'=> $item->thumbnail,
                // Sementara haruse dua relasi ambek ambil data looping lagi
                'images'=> $item->images[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
