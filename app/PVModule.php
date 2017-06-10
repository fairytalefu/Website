<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVModule extends Model
{

    protected $table         = "p_v_modules";
    protected $primaryKey     = ["module_id",'id'];
    public $incrementing = false;
    public function belongsToPVStation()
    {
        return $this->belongsTo('App\PVStation');
    }
}
