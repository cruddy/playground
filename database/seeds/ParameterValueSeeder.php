<?php

class ParameterValueSeeder extends BaseSeeder {

    public function run()
    {
        ParameterValue::truncate();

        $faker = Faker\Factory::create();

        $parameters = Parameter::with('options')->get();

        foreach (Product::all() as $product)
        {
            foreach (range(1, 3) as $index)
            {
                if ($faker->boolean)
                {
                    $parameter = $parameters->random();
                    $isNumeric = $parameter->type === 'numeric';

                    $product->parameters()->create(
                    [
                        'parameter_id' => $parameter->id,
                        'parameter_option_id' => $isNumeric ? null : $parameter->options->random()->id,
                        'value' => $isNumeric ? $faker->numberBetween(0, 500) : null,
                    ]);
                }
            }
        }
    }
}