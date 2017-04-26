<?php

namespace App\Http\Controllers;

use App\Fieldstatus;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class FieldstatusController extends Controller
{
    public function index()

    {
       // dd("hellooooo");
        $fieldstatuses = Fieldstatus::all();
       // dd("gsfdgfdsgdfgsdfg");
        return view ('fieldstatuses.index',compact('fieldstatuses'));
    }

    public function create()
    {
        //$fieldstatuses = Fieldstatus::lists('fieldname','id');
       // dd("afsdfasdgfasgfasgasgfas");

        return view('fieldstatuses.create',compact(''));
    }
    public function store(Request $request)
    {
        $fieldstatuses= new Fieldstatus($request->all());
        $fieldstatuses->save();
        return redirect('fieldstatuses');
    }
}