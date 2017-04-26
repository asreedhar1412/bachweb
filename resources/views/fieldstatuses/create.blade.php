@extends('layouts.app')
@section('content')

        <body background="images/webbginside.jpg">
        <div style="width: 100%">

            @include('includes.groundstaffsidebar')

            <div class="container" style="float: right; width: 80%;">

                <div class="pull-right">
                    <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
                </div>

   <div>

       <h1><b>Create New Field Status</b></h1>

   </div>
    {!! Form::open(['url' => 'fieldstatuses']) !!}
    <div class="form-group">
        {!! Form::label('fieldname', 'Field Name:') !!}
        {!! Form::text('fieldname',null,['class'=>'form-control', 'style'=>'width:40%']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('availability', 'Availability:') !!}
        {!! Form::text('availability',null,['class'=>'form-control','style'=>'width:40%']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status',null,['class'=>'form-control','style'=>'width:40%']) !!}
    </div>
                <br>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control','style'=>'width:10%']) !!}
    </div>
    {!! Form::close() !!}
            </div>
        </div>
        </body>

@stop

