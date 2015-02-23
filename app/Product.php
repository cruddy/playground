<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Model Product
 */
class Product extends Model {

    use MetaHolder;

    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * Product has many parameter values.
     */
    public function parameters()
    {
        return $this->hasMany('App\ParameterValue', 'product_id', 'id');
    }

}