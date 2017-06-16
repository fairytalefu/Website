<?php

namespace App\Http\Controllers;

use App\PVArray;
use Illuminate\Http\Request;
use Excel;
use DB;

class ExcelController extends Controller
{
    public function testExcel()
    {
        $data = PVArray::all()->toArray();
        Excel::create('testEx', function($excel) use($data){
            $excel->sheet('PVArray', function($sheet) use($data) {
                $sheet->fromArray($data);
            });
        })->export('xls');
    }
    public function postImport()
    {
        Excel::load(Input::file('pvarray'),function($reader){
            $reader->each(function ($sheet){
                PVArray::firstOrCreate($sheet->toArray);
            });
        });
    }
    public function getExport()
    {
        $pvarray = PVArray::all();
        Excel::create('ExportData',function ($excel) use($pvarray){
            $excel->sheet('pvarrayData',function ($sheet) use($pvarray){
                $sheet->fromArray($pvarray);
            });
        })->export('xlsx');
    }
    public function deleteAll()
    {
        DB::table('p_v_arrays')->delete();
        return back();
    }
}
