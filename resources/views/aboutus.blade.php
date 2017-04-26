@extends('layouts.app')

@section('content')
    <div class="container" style="float: right; width:90%;">
        <div class="pull-right">
            <img class="center-block" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
        </div>
        <div>
            <a href="{{ url('/welcome') }}"class="btn btn-primary" style="width: 200px; height: 30px;"> Back </a></ul>
        </div>
        <div>
            <img class="center-block" src="{{URL::asset('/images/building.jpg')}}" alt="profile Pic" height="200" width="500">
        </div>
        <div>

            <marquee behavior="scroll" direction="left"><h3><b>Customer satisfaction is worthless. Customer loyality is priceless...</b></h3></marquee>

        </div>

        <div align="center-right"; >
            <h1 style="color: red"> About Us </h1>

            <p><i><b> Aafrs was established in the year 2011 to provide recreational facilities to the citizens in Omaha. Omaha, being a soccer lover and a huskers supporter, aafrs felt the need to encourage more people to come down and play at their fields. This was done via a field reservation system, where a person or a group can reserve a field at our service for any event - be it any kind of sport or an outdoor event. With many valuable and loyal customers on board, our business growth has increased over the last few years.

                        </b></i></p>
            <p><i><b> Our field reservation system is a user friendly service, where the customer can easily register/login, select the field they would like to reserve for a particular period of time and the payment charges add accordingly on an hourly basis. If it is your first time visiting the page and looking to reserve a filed, you have come to the right place. Hope to see you on board soon.</b></i></p>




        </div>


    </div>

@endsection