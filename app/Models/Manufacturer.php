<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturer';

    public function description()
    {
        return $this->hasOne(ManufacturerDescription::class, 'manufacturer_id', 'manufacturer_id');
    }
}
