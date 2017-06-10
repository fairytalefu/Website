<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVStation extends Model
{
    protected $table         = "pvstation";
    protected $primaryKey     = "station_id";


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
