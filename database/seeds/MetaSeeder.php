<?php

class MetaSeeder extends BaseSeeder {

    public function run()
    {
        Meta::truncate();

        $faker = Faker\Factory::create();

        foreach (Post::all() as $post)
        {
            if ($faker->boolean)
            {
                $post->meta()->create(
                [
                    'title' => $faker->optional()->sentence(3),
                    'keywords' => implode(',', $faker->words(4)),
                    'description' => $faker->optional()->paragraph,
                ]);
            }
        }
    }
}