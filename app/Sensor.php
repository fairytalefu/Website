<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table         = "sensor";
    protected $primaryKey     = "sensor_id";
    public function device()
    {
        return $this->belongsTo('App\Devices');
    }
}
