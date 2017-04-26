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

                <img class="center-block" src="{{URL::asset('/images/welcomeimage.png')}}" alt="profile Pic" height="200" width="500">
            </div>

            <br>
            <br>
            <br>
            <div>

                <marquee behavior="scroll" direction="left"><h3><b>Hi there!! Reserving a field has just been made easier...</b></h3></marquee>

            </div>


<div align="center-right"; >
    <h1 style="color: red"> Rules & Regulations </h1>

    <p><i><b> 1. Athletic Field Use Fee : For use up to 6 hours - 72$</b></i></p>
    <p><i><b> 2. Athletic Field Use Fee : For more than 6 hours - 100$</b></i></p>
    <p><i><b> 3. Booking can be done maximum for one day</b></i></p>
    <p><i><b> 4. No iterative bookings are accepted</b></i></p>



</div>

        </div>
    </div>
    </body>
@endsection
