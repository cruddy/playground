<?php

class PostTableSeeder extends BaseSeeder {

    public function run()
    {
        Post::truncate();

        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $index)
        {
            $image = $faker->optional()->image(public_path('files'));

            Post::create(
            [
                'title' => $faker->sentence(2),
                'image' => $this->stripPublicPath($image),
                'body' => $faker->text,
                'active' => $faker->boolean(80),
            ]);
        }
    }

    public function stripPublicPath($path)
    {
        return $path ? substr($path, strlen(public_path()) + 1) : null;
    }
}