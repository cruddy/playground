<?php

class ProductSeeder extends BaseSeeder {

    public function run()
    {
        Product::truncate();

        $faker = Faker\Factory::create();

        foreach (range(1, 30) as $index)
        {
            Product::create(
            [
                'name' => $name = $faker->sentence(2),
                'slug' => Str::slug($name),
                'price' => $faker->randomFloat(2, 0, 500),
            ]);
        }
    }
}