<?php

namespace App\Entities;

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class Parameter extends BaseSchema {

    /**
     * @var string
     */
    protected $model = 'App\Parameter';

    /**
     * @var string
     */
    protected $titleAttribute = 'name';

    /**
     * @var string
     */
    protected $defaultOrder = 'name';

    /**
     * @var int
     */
    protected $perPage = 50;

    /**
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $s
     */
    public function fields($s)
    {
        $s->increments('id');

        $s->string('name');
        $s->string('key');

        $s->enum('type', [
            'optional' => 'parameters.type.optional',
            'numeric' => 'parameters.type.numeric',
        ]);

        $s->embed('options', 'parameter_options');

        $s->timestamps();
    }

    /**
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $s
     */
    public function columns($s)
    {
        $s->col('id');
        $s->col('name');
        $s->col('key');
        $s->col('updated_at')->orderDirection('desc');
    }

    /**
     * @param FluentValidator $v
     */
    public function rules($v)
    {
        $v->rules([
            'name' => 'required',
            'key' => 'required',
            'type' => 'required',
        ]);
    }
}