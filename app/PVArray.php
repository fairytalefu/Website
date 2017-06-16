<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVArray extends Model
{
    //
    protected $table         = "p_v_arrays";
    protected $primaryKey     = ["array_id",'id'];
    public $incrementing = false;
    protected $fillable=[
        'array_id',
        'station_id',
        'station_id',
        'Current',
        'Voltage',
        'Power',
        'status_describe',
        'upload_time',
    ];
    public function belongsToPVStation()
    {
        return $this->belongsTo('App\PVStation');
    }
}
