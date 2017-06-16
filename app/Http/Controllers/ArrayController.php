<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
class ArrayController extends Controller
{
    //
    public function index()
    {
        $pvarray = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.Array',['pvarray'=>$pvarray]);
    }
}
