<?php

namespace App\Entities;

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class ParameterValue extends BaseSchema {

    /**
     * @var string
     */
    protected $model = 'App\ParameterValue';

    /**
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $s
     */
    public function fields($s)
    {
        $s->increments('id');

        $s->relates('parameter', 'parameters');
        $s->relates('option', 'parameter_options')->constraintWith('parameter');

        $s->float('value');

        $s->timestamps(true);
    }

    /**
     * @param FluentValidator $v
     */
    public function rules($v)
    {
        $v->rules([
            'parameter' => 'required',
            'value' => 'numeric',
        ]);
    }
}