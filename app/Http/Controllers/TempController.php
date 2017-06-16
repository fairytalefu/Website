<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
class TempController extends Controller
{
    //
    public function index()
    {
        $pvT = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.Temp',['pvT'=>$pvT]);
    }
}
