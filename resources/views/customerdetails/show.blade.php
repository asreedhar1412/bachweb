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

    <h1>Customer Reservation Information</h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Organization</td>
                <td><?php echo ($customer['organization']); ?></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><?php echo ($customer['location']); ?></td>
            </tr>
            <tr>
                <td>Scheduled Reservations</td>
                <td><?php echo ($customer['reserve_info']); ?></td>
            </tr>

            </tbody>
        </table>
        <a href="{{url('customerdetails')}}" class="btn btn-primary">Close</a>
    </div>

                </div>
            </div>
        </div>
    </div>

@stop