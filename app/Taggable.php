<?php

namespace App;

trait Taggable {

    /**
     * Model has many tags.
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable', 'taggables');
    }

}