<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customer;

class CustomerDetailController extends Controller
{
    public function index()
    {
        //
        $customers=Customer::all();
        return view('customerdetails.index',compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customerdetails.show',compact('customer'));
    }

    public function create()
    {
        return view('customerdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $customer= new Customer($request->all());
        $customer->save();
        return redirect('customerdetails');
    }

    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customerdetails.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $customer= new Customer($request->all());
        $customer=Customer::find($id);
        $customer->update($request->all());
        return redirect('customerdetails');
    }

    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect('customerdetails');
    }

    public function stringify($id)
    {
        // $customer=Customer::where('id', $id)->select('customer_id','name','address','city','state','zip','home_phone','cell_phone')->first();
        $customer = Customer::where('name', $id)->select('name','organization','location','reserve_info')->first();

        $customer = $customer->toArray();
        return response()->json($customer);
    }

}
