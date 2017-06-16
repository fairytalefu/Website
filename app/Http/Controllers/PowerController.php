<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
class PowerController extends Controller
{
    public function index()
    {
        $pvP = PVArray::where('id', '>', 0)->Paginate(10);
        return view('test.Power',['pvP'=>$pvP]);
    }
}
