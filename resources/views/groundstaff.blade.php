@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.groundstaffsidebar')

        <div class="container" style="float: right; width: 80%;">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/BACK WEB LOGO.png')}}" alt="profile Pic" height="100" width="150">
            </div>
        </div>
        <div> <body style='background-color:whitesmoke'></div>


        <div class="container" style="float: right; width: 80%;">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <h1>List of the Fields</h1>
                    <br>
                    <br>


                    <div class="table-responsive" >
                        <table border="2" style="width: 100%" >
                            <tr class="alert-danger" >
                                <th class="text-center">Stadium</th>
                                <th class="text-center">Capacity</th>
                                <th class="text-center">Uses(s)</th>
                            </tr>
                            <tr class="alert-warning">
                                <td class="text-center">Darrell K Royal</td>
                                <td class="text-center">100119</td>
                                <td class="text-center">American Football</td>
                            </tr>
                            <tr class="alert-success">
                                <td class="text-center">Melbourne Cricket Ground (MCG)</td>
                                <td class="text-center">100024</td>
                                <td class="text-center">Cricket</td>
                            </tr>
                            <tr class="alert-warning">
                                <td class="text-center">Camp Nou</td>
                                <td class="text-center">99354</td>
                                <td class="text-center">Association Football</td>
                            </tr>
                            <tr class="alert-success">
                                <td class="text-center">Soccer City</td>
                                <td class="text-center">99354</td>
                                <td class="text-center">Association Football</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>
@endsection