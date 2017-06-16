<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
class CurrentController extends Controller
{
    //
    public function index()
    {
        $pvI = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.Current',['pvI'=>$pvI]);
    }
}
