<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorise = ["men", "women", "shoes", "baby", "adults"];

        for ($i = 0; $i < count($categorise); $i++) {
            Category::create([
                "name" => $categorise[$i]
            ]);
        }
    }
}
