@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

@include('includes.head')

<div class="container" style="float: right; width: 80%; ">
    <div class="pull-right">
        <img class="pull-right" src="{{URL::asset('/images/BACK WEB LOGO.png')}}" alt="profile Pic" height="100" width="150">
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <h1 style="color: black;"> Customer Details</h1>
            <br>
            <br>

           <!-- <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div> -->
            <div class="table-responsive">
                <table border="2" style="width: 100%">
                    <tr class="alert-danger">
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Organization</th>
                        <th class="text-center">Scheduled</th>
                    </tr>
                    <tr class="alert-warning">
                        <td class="text-center">David</td>
                        <td class="text-center">Football Association</td>
                        <td class="text-center">01/15/17 10:00AM - 3:00PM</td>
                    </tr>
                    <tr class="alert-success">
                        <td class="text-center">Sachin</td>
                        <td class="text-center">BCCI</td>
                        <td class="text-center">01/18/17 11:00AM - 4:00PM</td>
                    </tr>
                    <tr class="alert-warning">
                        <td class="text-center">Rafael Nadal</td>
                        <td class="text-center">Tennis Academy</td>
                        <td class="text-center">01/19/17 09:00AM - 4:00PM</td>
                    </tr>
                    <tr class="alert-success">
                        <td class="text-center">Saina</td>
                        <td class="text-center">BLC</td>
                        <td class="text-center">01/19/17 07:00AM - 5:00PM</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
    </body>
@endsection
