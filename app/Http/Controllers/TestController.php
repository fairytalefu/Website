<?php

namespace App\Http\Controllers;

use App\PVArray;
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
        return view('test.tb')->with('pvarray',$pvarray);
    }
}
