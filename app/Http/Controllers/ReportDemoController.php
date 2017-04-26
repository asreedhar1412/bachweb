<?php

namespace App\Http\Controllers;

use App\Fieldstatus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class ReportDemoController extends Controller
{
    public function importExport()
    {
        return view('reportnew');
    }
    public function downloadExcel($type)
    {
        $data = Fieldstatus::get()->toArray();
        return Excel::create('ReportGeneration_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
    public function importExcel()
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = ['fieldname' => $value->fieldname, 'availability' => $value->availability, 'status' => $value->status ];
                }
                if(!empty($insert)){
                    DB::table('fieldstatuses')->insert($insert);
                    dd('Report successfully uploaded.');
                }
            }
        }
        return back();
    }
}
