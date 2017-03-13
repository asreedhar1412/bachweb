@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.customersidebar')

        <div class="container" style="float: right; width: 80%;">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>

            <div>

                <img class="center-block" src="{{URL::asset('/images/welcome.jpg')}}" alt="profile Pic" height="200" width="500">
            </div>

            <br>
            <br>
            <br>
<div class="table-responsive">
    <table style="width: 70%;" border="2">
        <tr>
            <td style="width: 20%">
    <span class="text-center"><h2 style="color: black">Notifications:</h2></span>
                </td>
            <td style="width: 70%;color: black" class="text-center">

                A notification is a message
                you can display to the user
                outside of your application's
                normal UI. When you tell
                the system to issue a notification.
            </td>
        </tr>
    </table>


</div>

        </div>
    </div>
    </body>
@endsection
