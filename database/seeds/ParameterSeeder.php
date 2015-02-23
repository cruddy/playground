<?php

class ParameterSeeder extends BaseSeeder {

    public function run()
    {
        Parameter::truncate();

        $faker = Faker\Factory::create();

        $parameters = include __DIR__.'/data/parameters.php';

        foreach ($parameters as $key => $data)
        {
            $data['key'] = $key;

            unset($data['options']);

            Parameter::create($data);
        }
    }
}