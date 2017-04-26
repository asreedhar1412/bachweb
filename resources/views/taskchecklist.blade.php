@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">
    @include('includes.groundstaffsidebar')


    <div style="padding-left: 20px;width: 80%;float: right;">

        <div class="pull-right">
            <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
        </div>
        <div >
            <h1><b>Task Checklist</b></h1>
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('groundstaff') }}">
            <p>
                <br> <font size="3">
                    <input type="checkbox" name="agreement" class="number" value="I agree" > <b>Clean Field 1</b><br> <br>
                    <input type="checkbox" name="agreement" class="number" value="I agree" > <b>Arrange chairs in Field 2 auditorium</b><br> <br>
                    <input type="checkbox" name="agreement" class="number" value="I agree" > <b>Add 136 chairs in Field 3</b><br> <br>
                    <input type="checkbox" name="agreement" class="number" value="I agree" > <b>Water all the grounds before 26th April</b><br> <br>
                    <input type="checkbox" name="agreement" class="number" value="I agree" > <b>Make arrangements for a small tent in Field 2</b> <br> <br>
                    <input type="checkbox" name="agreement" class="number" value="I agree" > <b>Make arrangements for a sound system in Field 3</b><br> <br>
                    </font>
            </p> <br>

        </form>
    </div>
    </div>
    </body>
@endsection


