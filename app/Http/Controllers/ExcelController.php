<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use Input;
use DB;
use Excel;

class ExcelController extends Controller
{
    public function getImport(){
        return view('excel.importClient');
    }
    public function postImport(){
        Excel::load(Input::file('client'),function($reader){
            $reader->each(function($sheet){
                Client::firstOrCreate($sheet->toArray());
            });
        });
        return back();
    }
    public function getExport(){
        $client = Client::all();
        Excel::download('Export Data', function($excel) use($client){
        $excel->sheet('Sheet 1',function($sheet) use($client){
            $sheet->fromArray($client);
        });
    })->export('xlsx');
}

    public function deleteAll(){
        DB::table('clients')->delete();
        return back();
    }
}
