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

    <h1>Add New Field</h1>
    {!! Form::open(['url' => 'addremovefields']) !!}
    <div class="form-group">
        {!! Form::label('stadium', 'Stadium Name: ') !!}
        {!! Form::text('stadium',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('capacity', 'Capacity:') !!}
        {!! Form::text('capacity',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('uses', 'Stadium Uses') !!}
        {!! Form::text('uses',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>

            </div>
        </div>
    </div>

@stop