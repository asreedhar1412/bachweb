<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Field;

class CustomerFieldController extends Controller
{
    public function index()
    {
        $fields=Field::all();
        return view ('customerfields.index',compact('fields'));
    }

    public function show ($id)
    {
        $field=Field::findOrFail($id);
        return view ('customerfields.show', compact('field'));
    }

}
