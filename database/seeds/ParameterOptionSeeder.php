<?php

class ParameterOptionSeeder extends BaseSeeder {

    public function run()
    {
        ParameterOption::truncate();

        $faker = Faker\Factory::create();

        $parameters = include __DIR__.'/data/parameters.php';

        foreach (Parameter::all() as $param)
        {
            $options = array_get($parameters, $param->key.'.options', []);

            foreach ($options as $option)
            {
                $param->options()->create([ 'value' => $option ]);
            }
        }
    }
}