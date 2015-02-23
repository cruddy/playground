<?php

class ParametersSeeder extends BaseSeeder {

    public function run()
    {
        $this->call('ParameterSeeder');
        $this->call('ParameterOptionSeeder');
        $this->call('ParameterValueSeeder');
    }
}