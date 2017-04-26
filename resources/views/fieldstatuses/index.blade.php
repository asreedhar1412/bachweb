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

                    <h1><b>Field Status</b></h1>
                    <a href="{{action('FieldstatusController@create')}}" class="btn btn-success"><b>Create Field Status</b></a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">

                        <thead>
                        <tr class="bg-info">
                            <th><b>Field Name</b></th>
                            <th><b>Availability</b></th>
                            <th><b>Status</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fieldstatuses as $fieldstatus)
                            <tr>
                                <td>{{ $fieldstatus->fieldname }}</td>
                                <td>{{ $fieldstatus->availability }}</td>
                                <td>{{ $fieldstatus->status }}</td>
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