<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
class IrrController extends Controller
{
    //
    public function index()
    {
        $pvIrr = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.Irr',['pvIrr'=>$pvIrr]);
    }
}
