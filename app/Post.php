<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Model Post
 */
class Post extends Model {

    use Taggable, MetaHolder;

    /**
     * @var string
     */
    protected $table = 'posts';

}