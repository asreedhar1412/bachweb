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
                <img class="center-block" src="{{URL::asset('/images/welcomeimage.png')}}" alt="profile Pic" height="200" width="500">
            </div>
            <div>

                <marquee behavior="scroll" direction="left"><h3><b>Hi there!! Monitoring a field has just been made easier...</b></h3></marquee>

            </div>

            <div align="center-right"; >
                <h1 style="color: red"> Etiquette Policy </h1>

                <p><i><b> 1. No Food in Work Station</b></i></p>
                <p><i><b> 2. Mobile phone ringtones off</b></i></p>
                <p><i><b> 3. Complete the work according to the task assigned</b></i></p>
                <p><i><b> 4. E-mail for business use only</b></i></p>



            </div>

        </div>

    </div>
    </body>
@endsection