<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
class VoltageController extends Controller
{
    //
    public function index()
    {
        $pvV = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.Voltage',['pvV'=>$pvV]);
    }
}
