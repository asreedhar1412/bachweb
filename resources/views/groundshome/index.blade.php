@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.groundstaffsidebar')
        <div class="container" style="float: right; width: 80%; ">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-1">

    <h1>List of Fields</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Stadium</th>
            <th>Capacity</th>
            <th>Uses</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fields as $field)
            <tr>
                <td>{{ $field->stadium }}</td>
                <td>{{ $field->capacity }}</td>
                <td>{{ $field->uses }}</td>
                <td><a href="{{url('groundshome',$field->id)}}" class="btn btn-primary">Show</a></td>
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