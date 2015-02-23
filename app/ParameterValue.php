<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Model ParameterValue
 */
class ParameterValue extends Model {

    /**
     * @var string
     */
    protected $table = 'parameter_values';

    /**
     * Value belongs to the parameter.
     */
    public function parameter()
    {
        return $this->belongsTo('App\Parameter', 'parameter_id', 'id', 'parameter');
    }

    /**
     * Value belongs to the parameter option.
     */
    public function option()
    {
        return $this->belongsTo('App\ParameterOption', 'parameter_option_id', 'id', 'option');
    }

}