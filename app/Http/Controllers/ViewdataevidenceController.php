<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evidence;
class ViewdataevidenceController extends Controller
{

    public function index()
    {
        //
        $evidence = Evidence::all();
        return view('evidence.index', compact('evidence'));
    }
}

