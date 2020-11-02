<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Model\Product::class, 50)->create();
       $faker = Faker::create();
       foreach(range(1,50) as $index){

        DB::table('products')->insert([
            'name' => $faker->sentence(5),
            'description' => $faker->sentence(20),
            'price' => $faker->numberBetween(100, 500)
        ]);
       }
       
    }
}
