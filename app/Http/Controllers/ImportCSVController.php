<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TBLData;
use Excel;
use File;
use Storage;
use DateTime;

class ImportCSVController extends Controller
{
    function index(){
    	$data = DB::table('tbl_data')->orderBy('id', 'DESC')->get();
    	return view('index', compact('data'));
    }

    function import(){
        TBLData::truncate();
        $now = new DateTime();
        $datetime = $now->format('d-m-Y');
        $concat = $datetime.'.csv';
        $path = File::get($concat);
        $data = array_map('str_getcsv', file($concat));
        
        for ($i = 1; $i < sizeof($data); $i++) {
            $insert_data = [];
            for ($j = 0; $j < 10; $j++) { 
                $attr = $data[$i][$j];
                array_push($insert_data, $attr);
            }
            $tbl_data = new TBLData();
            $tbl_data->hora = $insert_data[0];
            $tbl_data->latitude = $insert_data[1];
            $tbl_data->longitude = $insert_data[2];
            $tbl_data->altitude = $insert_data[3];
            $tbl_data->temperatura = $insert_data[4];
            $tbl_data->humidade = $insert_data[5];
            $tbl_data->co2 = $insert_data[6];
            $tbl_data->luminosidade = $insert_data[7];
            $tbl_data->pressao = $insert_data[8];
            $tbl_data->radiacao = $insert_data[9];
            $tbl_data->save();
        }
        return back()->with('success', 'CSV Data Imported successefully.');
        return view('import_csv', compact('data'));
    } 

}
