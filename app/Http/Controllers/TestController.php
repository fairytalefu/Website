<?php

namespace App\Http\Controllers;

use App\PVArray;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    //
    public function index()
    {
        $pvarray = DB::select('select Temp from p_v_arrays');
        return view('test.ibk')->with('pvarray',$pvarray);
    }
    public function array_table()
    {
//        $pvarray = DB::select('select * from p_v_arrays')->simplePaginate(15);
        $pvarray = PVArray::paginate(15);
        $pvT = PVArray::where('id', '>', 0)->Paginate(10);
        $pvIrr = PVArray::where('id', '>', 0)->Paginate(10);
        $pvV = PVArray::where('id', '>', 0)->Paginate(10);
        $pvI = PVArray::where('id', '>', 0)->Paginate(10);
        $status = PVArray::where('id', '>', 0)->Paginate(10);
        $power = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.tb',['pvarray' => $pvarray,'pvT'=>$pvT,'pvIrr' =>$pvIrr, 'pvV' =>$pvV, 'pvI' =>$pvI,'status' => $status,'power' => $power]);
    }

    public function toChart()
    {
        $pvT = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.chart',['pvT'=>$pvT]);
    }
}
