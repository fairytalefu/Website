<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\PVArray;
use \App\Devices;
use DB;
use function MongoDB\BSON\toJSON;

class DashBoardController extends Controller
{
    //
    public $abData = [];
    protected $deviceStatus = [];

    public function __construct()
    {
        $this->abData = $this->arrayStatus();
        $this->deviceStatus = $this->DeviceStatus();
    }

    public function index()
    {
        $aData = $this->abData;
        $deviceStatus = $this->deviceStatus;
        $this->array_Temp();
        return view('test.index',compact('aData','deviceStatus'));
    }
    public function arrayStatus()
    {
        $aData = PVArray::all()->last();
        return $aData;
    }
    public function DeviceStatus()
    {
        $deviceStatus = Devices::all()->last();
        return $deviceStatus;
    }
    public function array_Temp()
    {
        $temp = DB::select('select Temp from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $temp_colletion = collect($temp);
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $tempCollection = $temp_colletion->pluck('Temp');
        $h = array_merge([$tempCollection,$timeCollection]);
       return response()->json(array('temp'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Irr()
    {
        $Irr = DB::select('select Irr from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Irr_colletion = collect($Irr);
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $IrrCollection = $Irr_colletion->pluck('Irr');
        $h = array_merge([$IrrCollection,$timeCollection]);
        return response()->json(array('Irr'=> $h[0],'time'=>$h[1]), 200);
    }

    public function array_Current()
    {
        $Current = DB::select('select Current from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Current_colletion = collect($Current);
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $CurrentCollection = $Current_colletion->pluck('Irr');
        $h = array_merge([$CurrentCollection,$timeCollection]);
        return response()->json(array('Current'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Voltage()
    {
        $Current = DB::select('select Voltage from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Voltage_colletion = collect($Current);
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $VoltageCollection = $Voltage_colletion->pluck('Irr');
        $h = array_merge([$VoltageCollection,$timeCollection]);
        return response()->json(array('Voltage'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Power()
    {
        $Current = DB::select('select Power from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Power_colletion = collect($Current);
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $PowerCollection = $Power_colletion->pluck('Irr');
        $h = array_merge([$PowerCollection,$timeCollection]);
        return response()->json(array('Power'=> $h[0],'time'=>$h[1]), 200);
    }
}

