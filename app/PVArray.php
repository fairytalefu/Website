<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVArray extends Model
{
    //
    protected $table         = "p_v_arrays";
    protected $primaryKey     = ["array_id",'id'];
    public $incrementing = false;
    public function belongsToPVStation()
    {
        return $this->belongsTo('App\PVStation');
    }
}
