<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\PVArray;
use \App\Devices;
use DB;

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
        $tempCollection = $temp_colletion->pluck('Temp');
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');

        $h = array_merge([$tempCollection,$timeCollection]);
       return response()->json(array('temp'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Irr()
    {
        $Irr = DB::select('select Irr from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Irr_colletion = collect($Irr);
        $IrrCollection = $Irr_colletion->pluck('Irr');
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');

        $h = array_merge([$IrrCollection,$timeCollection]);
        return response()->json(array('Irr'=> $h[0],'time'=>$h[1]), 200);
    }

    public function array_Current()
    {
        $Current = DB::select('select Current from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Current_colletion = collect($Current);
        $CurrentCollection = $Current_colletion->pluck('Current');
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
         $h = array_merge([$CurrentCollection,$timeCollection]);
        return response()->json(array('Current'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Voltage()
    {
        $Voltage = DB::select('select Voltage from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $Voltage_colletion = collect($Voltage);
        $VoltageCollection = $Voltage_colletion->pluck('Voltage');
        $h = array_merge([$VoltageCollection,$timeCollection]);
        return response()->json(array('Voltage'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Power()
    {
        $Power = DB::select('select Power from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');
        $Power_colletion = collect($Power);
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');
        $PowerCollection = $Power_colletion->pluck('Power');
        $h = array_merge([$PowerCollection,$timeCollection]);
        return response()->json(array('Power'=> $h[0],'time'=>$h[1]), 200);
    }
    public function array_Data()
    {
        /*取出各个参数*/
        $Temp = DB::select('select Temp from p_v_arrays');
        $Irr = DB::select('select Irr from p_v_arrays');
        $Current = DB::select('select Current from p_v_arrays');
        $Voltage = DB::select('select Voltage from p_v_arrays');
        $Power = DB::select('select Power from p_v_arrays');
        $time = DB::select('select created_at from p_v_arrays');

        $Temp_colletion = collect($Temp);
        $tempCollection = $Temp_colletion->pluck('Temp');
        $Irr_colletion = collect($Irr);
        $IrrCollection = $Irr_colletion->pluck('Irr');
        $Current_colletion = collect($Current);
        $CurrentCollection = $Current_colletion->pluck('Current');
        $Voltage_colletion = collect($Voltage);
        $VoltageCollection = $Voltage_colletion->pluck('Voltage');
        $Power_colletion = collect($Power);
        $PowerCollection = $Power_colletion->pluck('Power');
        $colletion = collect($time);
        $timeCollection = $colletion->pluck('created_at');

        $h = array_merge([$tempCollection,$IrrCollection,$CurrentCollection,$VoltageCollection,$PowerCollection,$timeCollection]);
        return response()->json(array('Temp'=> $h[0],'Irr'=>$h[1],
            'Current'=> $h[2],'Voltage'=>$h[3],
            'Power'=> $h[4],'time'=>$h[5]), 200);
    }
}

