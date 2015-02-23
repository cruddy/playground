<?php

namespace App\Entities;

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class ParameterOption extends BaseSchema {

    /**
     * @var string
     */
    protected $model = 'App\ParameterOption';

    /**
     * @var string
     */
    protected $titleAttribute = 'value';

    /**
     * @var string
     */
    protected $defaultOrder = 'parameter';

    /**
     * @var array
     */
    protected $filters = [ 'parameter' ];

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

        $s->relates('parameter', 'parameters')->hide();
        $s->string('value');

        $s->timestamps(true);
    }

    /**
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $s
     */
    public function columns($s)
    {
        $s->col('id');
        $s->col('parameter');
        $s->col('value');
        $s->col('updated_at')->reversed();
    }

    /**
     * @param FluentValidator $v
     */
    public function rules($v)
    {
        $v->rules([
            'value' => 'required',
        ]);
    }
}