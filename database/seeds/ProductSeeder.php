<?php

use App\Category;
use App\Product;
use Faker\Factory;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                "name" => $faker->word(3),
                "description" => $faker->sentence(15),
                "price" => "29$",
                "photo" => $faker->imageUrl($width = 640, $height = 480),
                "category_id" => Category::inRandomOrder()->first()->id,

            ]);
        }
    }
}
