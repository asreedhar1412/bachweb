@extends('layouts.app')

@section('content')
<body background="images/webbginside.jpg">
<div style="width: 100%">

    @include('includes.customersidebar')

    <div class="container" style="float: right; width: 80%">
        <div class="pull-right">
            <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">

        </div>

        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">


                    <div class="header">
                        <h4>Choose the Date:</h4>
                    </div>
                    <input type='date' class="form-control" name="datevalue" id="datevalue" />
                    <div class="header">
                        <h4>Select the time :</h4>

                    </div>
                    <span>From:</span>       <input type="time" id="from"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>To: </span><input type="time" id="to"/>
                    <br>
                    <br>
                    <br>
                    <img class="center-block" src="{{URL::asset('/images/court.jpg')}}">
                    <br>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type ='radio' id="selection"/> <span>Select</span>
                    </div>
                    <br>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-primary" style="width: 200px; height: 30px;">Submit</button>
                        <span class="pull-right"><a href="#" id="next" style="color: black"><u>Next>></u></a> </span>
                    </div>

                </div>
            </div>

        </div>



    </div>
</div>
</body>
@endsection