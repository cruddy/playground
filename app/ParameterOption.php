<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model ParameterOption
 */
class ParameterOption extends Model {

    /**
     * @var string
     */
    protected $table = 'parameter_options';

    /**
     * Option belongs to a parameter.
     */
    public function parameter()
    {
        return $this->belongsTo('App\Parameter', 'parameter_id', 'id', 'parameter');
    }

}