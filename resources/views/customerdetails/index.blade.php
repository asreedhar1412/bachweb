@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.head')
        <div class="container" style="float: right; width: 80%; ">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-1">

    <h1>Customer Reservation Details</h1>
    <a href="{{url('/customerdetails/create')}}" class="btn btn-success">Create Reservation</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Name</th>
            <th>Organization</th>
            <th>Location</th>
            <th>Scheduled Reservations</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->organization }}</td>
                <td>{{ $customer->location }}</td>
                <td>{{ $customer->reserve_info }}</td>
                <td><a href="{{url('customerdetails',$customer->id)}}" class="btn btn-primary">Show</a></td>
                <td><a href="{{route('customerdetails.edit',$customer->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['customerdetails.destroy', $customer->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
