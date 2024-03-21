<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attribute';

    public function description()
    {
        return $this->hasOne(AttributeDescription::class, 'attribute_id', 'attribute_id');
    }

    public function group()
    {
        return $this->belongsTo(AttributeGroup::class, 'attribute_group_id', 'attribute_group_id');
    }
}
