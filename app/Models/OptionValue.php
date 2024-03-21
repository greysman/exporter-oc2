<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'option_value';

    public function description()
    {
        return $this->hasOne(OptionValueDescription::class, 'option_value_id', 'option_value_id');
    }
}
