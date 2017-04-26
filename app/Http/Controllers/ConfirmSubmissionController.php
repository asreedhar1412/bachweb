<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\AvailOffields;

class ConfirmSubmissionController extends Controller
{

    public function index()
    {
        $fields=AvailOffields::all();
        return view ('confirmsubmission',compact('fields'));
    }

    public function store (Request $request)
    {
        $field= new AvailOffields ($request->all());
        $field->save();
        return redirect('confirmsubmission');
    }

    public function stringify ($id)
    {
        $field=AvailOffields::where('stadium', $id)->select('stadium','capacity','uses')->first();
        $field=$field->toArray();
        return response()->json(field);
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

}
