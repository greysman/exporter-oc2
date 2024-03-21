<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id', 'product_id');
    }

    public function categories()
    {
        return $this->hasMany(ProductCategory::class, 'product_id', 'product_id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'manufacturer_id');
    }

    public function description()
    {
        return $this->hasOne(ProductDescription::class, 'product_id', 'product_id');
    }

    public function discounts()
    {
        return $this->hasMany(ProductDiscount::class, 'product_id', 'product_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
    }

    public function options()
    {
        return $this->hasMany(ProductOption::class, 'product_id', 'product_id');
    }

    public function optionValues()
    {
        return $this->hasMany(ProductOptionValue::class, 'product_id', 'product_id');
    }

    public function specials()
    {
        return $this->hasMany(ProductSpecial::class, 'product_id', 'product_id');
    }
}
