<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Field;

class AddRemoveFieldsController extends Controller
{
    public function index()
    {
        $fields=Field::all();
        return view ('addremovefields.index',compact('fields'));
    }

    public function show ($id)
    {
        $field=Field::findOrFail($id);
        return view ('addremovefields.show', compact('field'));
    }

    public function create ()
    {
        return view ('addremovefields.create');
    }

    public function store (Request $request)
    {
        $field= new Field ($request->all());
        $field->save();
        return redirect('addremovefields');
    }
    public function edit ($id)
    {
        $field=Field::find($id);
        return view ('addremovefields.edit', compact('field'));
    }
    public function update($id, Request $request)
    {
        //$listoffields=new Field ($request->all());
        $field=Field::find($id);
        $field->update($request->all());
        return redirect ('addremovefields');
    }
    public function destroy ($id)
    {
        Field::find($id)->delete();
        return redirect ('addremovefields');
    }
    public function stringify ($id)
    {
        $field=Field::where('stadium', $id)->select('stadium','capacity','uses')->first();
        $field=$field->toArray();
        return response()->json(field);
    }


    public function updateReservation(Request $request)
    {
        $field=Field::find($request['radio1']);
        //dd($field);
        $field->update($request->all());
        return redirect ('terms');
    }
}




