<?php

namespace App;

trait MetaHolder {

    /**
     * Model has meta data.
     */
    public function meta()
    {
        return $this->morphOne('App\Meta', 'meta_holder');
    }

}