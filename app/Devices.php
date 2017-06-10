<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $table         = "devices";
    protected $primaryKey     = "device_uuid";

    public function sensor()
    {
        return $this->hasMany('App\Sensor');
    }
}
