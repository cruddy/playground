<?php

namespace App\Entities;

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class Product extends BaseSchema {

    /**
     * @var string
     */
    protected $model = 'App\Product';

    /**
     * @var string
     */
    protected $titleAttribute = 'name';

    /**
     * @var string
     */
    protected $defaultOrder = 'updated_at';

    /**
     * @var array
     */
    protected $defaults = [ 'price' => 0 ];

    /**
     * @var array
     */
    protected $filters = [ 'price' ];

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
        $s->slug('slug', 'name');

        $s->float('price');

        $s->embed('parameters', 'parameter_values');

        $s->embed('meta', 'meta');

        $s->timestamps(true);
    }

    /**
     * @param \Kalnoy\Cruddy\Schema\Layout\Layout $l
     */
    public function layout($l)
    {
        $l->row([ 'name', 'slug' ]);
        $l->field('price', 'parameters');
        $l->tab('meta.title.plural', 'meta');
    }

    /**
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $s
     */
    public function columns($s)
    {
        $s->col('id');
        $s->col('name');
        $s->col('price');
        $s->col('updated_at')->reversed();
    }

    /**
     * @param FluentValidator $v
     */
    public function rules($v)
    {
        $v->rules([
            'name' => 'required|max:255',
            'slug' => 'required|alphadash|max:255',
            'price' => 'required|numeric|min:0',
        ]);
    }
}