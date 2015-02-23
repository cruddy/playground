<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Model Tag
 */
class Tag extends Model {

    /**
     * @var string
     */
    protected $table = 'tags';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'taggable', 'taggables');
    }

}