<?php

namespace App\Entities;

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class Post extends BaseSchema {

    /**
     * @var string
     */
    protected $model = 'App\Post';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'title';

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = 'title';

    /**
     * @var array
     */
    protected $filters = [ 'active', 'tags' ];

    /**
     * @var array
     */
    protected $defaults = [ 'active' => true ];

    /**
     * @var int
     */
    protected $perPage = 30;

    /**
     * Define some fields.
     *
     * @param $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');

        $schema->string('title');
        $schema->image('image');

        // Use ACE to edit body as markdown
        $schema->ckedit('body');

        $schema->boolean('active');

        $schema->embed('meta', 'meta');
        $schema->relates('tags', 'tags');

        $schema->timestamps();
    }

    /**
     * @param \Kalnoy\Cruddy\Schema\Layout\Layout $l
     */
    public function layout($l)
    {
        $l->row([
            function ($col)
            {
                $col->field('title');
                $col->row([ [ 3, 'active' ], [ 5, 'created_at' ] ]);
            },

            [ 3, 'image' ],
        ]);

        $l->field('body', 'tags');
        $l->tab('meta.title.singular', 'meta');
    }

    /**
     * Define some columns.
     *
     * @param $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('image')->format('Image');
        $schema->col('title');
        $schema->col('active');
        $schema->col('updated_at')->orderDirection('desc');
    }

    /**
     * Define some files to upload.
     *
     * @param $repo
     */
    public function files($repo)
    {
        $repo->uploads('image');
    }

    /**
     * Define validation rules.
     *
     * @param $v
     */
    public function rules($v)
    {
        $v->rules([
            'title' => 'required',
            'body' => 'required',
        ]);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $post
     *
     * @return string
     */
    public function externalUrl($post)
    {
        return '/posts/'.$post->getKey();
    }
}