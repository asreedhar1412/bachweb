
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

    <h1>Update Reservation Details</h1>
    {!! Form::model($customer,['method' => 'PATCH','route'=>['customerdetails.update',$customer->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('organization', 'Organization') !!}
        {!! Form::text('organization',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('reserve_info', 'Scheduled Reservations:') !!}
        {!! Form::text('reserve_info',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@stop
