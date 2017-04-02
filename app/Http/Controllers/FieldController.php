<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Field;

class FieldController extends Controller
{
    public function index()
    {
        $fields=Field::all();
        return view ('listoffields.index',compact('fields'));
    }

    public function show ($id)
    {
        $field=Field::findOrFail($id);
        return view ('listoffields.show', compact('field'));
    }

}



