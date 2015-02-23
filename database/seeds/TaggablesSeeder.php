<?php

class TaggablesSeeder extends BaseSeeder {

    public function run()
    {
        DB::table('taggables')->truncate();

        $faker = Faker\Factory::create();

        $posts = Post::lists('id');
        $tags = Tag::lists('id');

        foreach (range(1, 20) as $index)
        {
            DB::table('taggables')->insert(
            [
                'taggable_type' => 'Post',
                'taggable_id' => $faker->randomElement($posts),
                'tag_id' => $faker->randomElement($tags),
            ]);
        }
    }
}