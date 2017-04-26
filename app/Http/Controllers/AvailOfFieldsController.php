<?php

namespace App\Http\Controllers;

use App\AvailOffields;
use Illuminate\Http\Request;

class AvailOfFieldsController extends Controller
{
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
    public function index()

    {
        return view('availabilityoffields');
    }

    public function store (Request $request)
    {
        dd($request->all());
        $availoffields=new AvailOffields($request->all());
        $availoffields->save();
    }
}
