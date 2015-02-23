<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Model Parameter
 */
class Parameter extends Model {

    /**
     * @var string
     */
    protected $table = 'parameters';

    /**
     * Parameter has many options.
     */
    public function options()
    {
        return $this->hasMany('App\ParameterOption', 'parameter_id', 'id');
    }

}