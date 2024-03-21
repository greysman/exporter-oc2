<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_option_value';

    public function value()
    {
        return $this->belongsTo(OptionValue::class, 'option_value_id', 'option_value_id');
    }

    public function warehouses()
    {
        return $this->hasMany(ProductOptionValueWarehouse::class, 'product_option_value_id', 'product_option_value_id');
    }
}
