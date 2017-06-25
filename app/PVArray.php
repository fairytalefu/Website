<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVArray extends Model
{
    //
    protected $table         = "p_v_arrays";
    protected $fillable=[
        'array_id',
        'station_id',
        'Current',
        'Voltage',
        'Power',
        'Temp',
        'Irr',
        'status_describe',
        'upload_time',
    ];

}
