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
            <img class="center-block" src="{{URL::asset('/images/PKI.jpg')}}" alt="profile Pic" height="250" width="500">
        </div>
        <div>
            <h1 style="color: red"> Contact Us </h1>
        </div>
        <div>

            <marquee behavior="scroll" direction="left"><h3><b>Our team of  ninjas are ready to hear from you </b></h3></marquee>

        </div>
<div>
    <table>
        <tr>
            <td>
                <img class="center-block" src="{{URL::asset('/images/akshitha.jpg')}}" alt="profile Pic" height="150" width="150">
                <br>
                <p><b>Akshitha Sreedhar - Developer/Tester &nbsp &nbsp</b></p>
                <p><b>Email - asreedhar@unomaha.edu &nbsp &nbsp</b></p>
            </td>

            <td>
                <img class="center-block" src="{{URL::asset('/images/chaitra.jpg')}}" alt="profile Pic" height="150" width="150">
                <br>
                <p><b>&nbsp Chaitra Venkatesan - Developer/Tester &nbsp &nbsp</b></p>
                <p><b>&nbsp Email - cvenkatesan@unomaha.edu &nbsp &nbsp</b></p>
            </td>

            <td>
                <img class="center-block" src="{{URL::asset('/images/Holly.JPG')}}" alt="profile Pic" height="150" width="150">
                <br>
                <p><b>&nbsp Holly Rosser - Developer/Business Analyst &nbsp &nbsp</b></p>
                <p><b>&nbsp Email - hrosser@unomaha.edu &nbsp &nbsp</b></p>
            </td>

            <td>
                <img class="center-block" src="{{URL::asset('/images/bidz.jpg')}}" alt="profile Pic" height="150" width="150">
                <br>
                <p><b>&nbsp Bidisha Biswas - Tester/Business Analyst &nbsp </b></p>
                <p><b>&nbsp Email - bbiswas@unomaha.edu &nbsp &nbsp</b></p>
            </td>

            <td>
                <img class="center-block" src="{{URL::asset('/images/aditya.jpg')}}" alt="profile Pic" height="150" width="150">
                <br>
                <p><b>&nbsp Aditya Vogeti - Developer/Business Analyst &nbsp </b></p>
                <p><b>&nbsp Email - rvogetivenkata@unomaha.edu &nbsp &nbsp</b></p>
            </td>

        </tr>
    </table>
</div>


    </div>

@endsection