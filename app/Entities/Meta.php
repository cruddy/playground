<?php

namespace App\Entities;

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class Meta extends BaseSchema {

    /**
     * @var string
     */
    protected $model = 'App\Meta';

    /**
     * Define some fields.
     *
     * @param $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');

        $schema->string('title');
        $schema->string('keywords');
        $schema->text('description')->rows(3);

        // We don't want timestamps to be visible
        // $schema->timestamps();
    }

    /**
     * Define validation rules.
     *
     * @param $v
     */
    public function rules($v)
    {
        $v->always([
            'title' => 'max:255',
            'keywords' => 'max:255',
            'description' => 'max:255',
        ]);
    }
}