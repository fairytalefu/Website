<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\PVArray;
class DashBoardController extends Controller
{
    //
    protected $aData = [];

    public function index()
    {
        return view('test.index',compact('aData'));
    }
    public function arrayStatus()
    {

        $Vmp = PVArray::all()->last()->Vmp;
        $Imp = PVArray::all()->last()->Imp;
        $Temp = PVArray::all()->last()->Temp;
        $Irr = PVArray::all()->last()->Irr;
        array_push($aData, $Temp, $Irr, $Vmp, $Imp);
    }
    public function DeviceStatus()
    {

        $Vmp = PVArray::all()->last()->Vmp;
        $Imp = PVArray::all()->last()->Imp;
        $Temp = PVArray::all()->last()->Temp;
        $Irr = PVArray::all()->last()->Irr;
        array_push($aData, $Temp, $Irr, $Vmp, $Imp);
    }
}
