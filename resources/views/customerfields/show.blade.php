@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">
        @include('includes.customersidebar')
        <div class="container" style="float: right; width: 80%; ">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-1">

    <h1>Field Information </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Stadium Name</td>
                <td><?php echo ($field['stadium']); ?></td>
            </tr>
            <tr>
                <td>Capacity</td>
                <td><?php echo ($field['capacity']); ?></td>
            </tr>
            <tr>
                <td>Uses</td>
                <td><?php echo ($field['uses']); ?></td>
            </tr>

            </tbody>
        </table>
        <a href="{{url('customerfields')}}" class="btn btn-primary">Close</a>
    </div>
    </div>
            </div>
        </div>
    </div>

@stop