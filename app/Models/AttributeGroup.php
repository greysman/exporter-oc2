<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attribute_group';

    public function attribute()
    {
        return $this->hasMany(Attribute::class, 'attribute_group_id', 'attribute_group_id');
    }

    public function description()
    {
        return $this->hasOne(AttributeGroupDescription::class, 'attribute_group_id', 'attribute_group_id');
    }
}
