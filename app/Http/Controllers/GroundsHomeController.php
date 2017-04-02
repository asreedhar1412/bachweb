<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Field;

class GroundsHomeController extends Controller
{
    public function index()
    {
        $fields=Field::all();
        return view ('groundshome.index',compact('fields'));
    }

    public function show ($id)
    {
        $field=Field::findOrFail($id);
        return view ('groundshome.show', compact('field'));
    }

}