<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $fillable = [
        'kelembapan_tanah', 'suhu', 'gas_karbon', 'gas_metana',
    ];
}
