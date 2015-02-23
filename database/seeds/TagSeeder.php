<?php

class TagSeeder extends BaseSeeder {

    public function run()
    {
        Tag::truncate();

        $faker = Faker\Factory::create();

        foreach (range(1, 5) as $index)
        {
            Tag::create(
            [
                'value' => $faker->word,
            ]);
        }
    }
}