@extends('layouts.app')

@section('content')
    <script type="text/javascript">
            $(document).ready(function() {
                $('#date').datepicker();
                $('#submit1').click(function(e) {
                    var test = $('input[name=radio]:checked').val();
                    var date = $('#date').val();
                    var from = $('#fromval').val();
                    var to = $('#toval').val();
                    document.getElementById("radio1").value = test;
                    document.getElementById("reservationdate").value = date;
                    document.getElementById("from").value = from;
                    document.getElementById("to").value = to;
                    if(test == null || date == null || from == null || to==null)
                    {
                        alert("Please select the required fields and try again!");
                        e.preventDefault();
                    }
                    else {
                        $(this).closest("form").submit();
                    }
                });
            });




    </script>
    <body background="images/webbginside.jpg">
    {{Html::style('css/testing.css')}};
    <form action="{{url('updateReservation')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div style="width: 100%">


        @include('includes.customersidebar')



        <div class="container" style="float: right; width: 80%">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">

            </div>
            <div>
                <h1><b>&nbsp &nbsp Availability Of Fields</b></h1>
            </div>
            <table>
                <tr>
                    <td style="padding:0 20px 0 20px;">
            <div class="img__wrap">
                <img width="257px" height="190px" class="img__img" src="{{URL::asset('/images/court.jpg')}}" />
                <p class="img__description">Badminton Court : The court is rectangular and divided into halves by a net.Courts are usually marked for both singles and doubles play.The full width of the court is 6.1 metres (20 ft), and in singles this width is reduced to 5.18 metres (17 ft). </p>
                <div>

                    <input type ='radio' name="radio" id="field1" value="1"/> <span>Select</span>
                </div>
            </div>
                    </td>
                    <td style="padding:0 20px 0 20px;">
                        <div class="img__wrap">
                            <img width="257px" height="190px" class="img__img" src="{{URL::asset('/images/footballcourt.jpg')}}" />
                            <p class="img__description">Football Field : The pitch is rectangular in shape. The longer sides are called touchlines. The other opposing sides are called the goal lines. The two goal lines are between 45 and 90 m (50 and 100 yd) and be the same length.</p>
                            <div>
                               <input type ='radio' name="radio" id="field2" value="2"/> <span>Select</span>
                            </div>
                        </div>
                    </td>

                    <td style="padding:0 20px 0 20px;">
                        <div class="img__wrap">
                            <img width="257px" height="190px" class="img__img" src="{{URL::asset('/images/bbcourt.jpg')}}" />
                            <p class="img__description"> Basketball Court : Playing surface, consists of a rectangular floor with tiles at either end .The court is 94 by 50 feet . The baskets are always 10 feet (3.0 m) above the floor (except possibly in youth competition). (29 by 15 m).</p>
                            <div>
                                <input type ='radio' name="radio" id="field3" value="3"/> <span>Select</span>
                            </div>
                        </div>

                    </td>
                </tr>
                <br>
            </table>
            <br>
            <br>
            <table>
                <tr>


                    <td style="padding:0 20px 0 20px;">
                        <div class="img__wrap">
                            <img width="257px" height="190px" class="img__img" src="{{URL::asset('/images/tenniscourts.jpg')}}" />
                            <p class="img__description"> Tennis Court : It is a firm rectangular surface with a low net stretched across the center. The same surface can be used to play both doubles and singles matches.  The court is 78 feet (23.77 metres) long. Its width is 27 feet (8.23 metres) </p>
                            <div>
                                <input type ='radio' name="radio" id="field4" value="4"/> <span>Select</span>
                            </div>
                        </div>
                    </td>

                    <td style="padding:0 20px 0 20px;">
                        <div class="img__wrap">
                            <img width="257px" height="190px" class="img__img" src="{{URL::asset('/images/cricket.jpg')}}" />
                            <p class="img__description"> Cricket Field : The playing area is 150 yards (137.16 metres) from boundary to boundary square of the pitch, with the shorter of the two square boundaries being a minimum 65 yards (59.43 metres). The straight boundary at both ends of the pitch are a minimum of 70 yards (64.00 metres).</p>
                            <div>
                                <input type ='radio' name="radio" id="field5" value="5"/> <span>Select</span>
                            </div>
                        </div>
                    </td>

                    <td style="padding:0 20px 0 20px;">
                        <div class="img__wrap">
                            <img width="257px" height="190px" class="img__img" src="{{URL::asset('/images/rugby.jpg')}}" />
                            <p class="img__description">Rugby field : Rugby is played on a field of 112–122 by 68 metres[1] (122.5–133.4 × 74.3 yards). The longer boundary lines are touch lines, while the shorter boundary lines are dead ball lines.The touch lines and dead ball lines are out of play.</p>
                            <div>
                                <input type ='radio' name="radio" id="field6" value="6"/> <span>Select</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <br/>
            <div class="header">
                <h4>Choose the Date:</h4>
            </div>
            <input style="width: 240px" type="text" class="form-control" id="date">
            <div class="header">
                <h4>Select the time :</h4>

            </div>
            <span>From:</span>       <input type="time" id="fromval"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>To: </span><input type="time" id="toval"/>


            <div style="text-align: center">

                <input class="btn btn-primary" id="submit1" type="submit" value="Submit" name="submit">
                <br>
                <br>
            </div>
            <input type='hidden' name='radio1' id='radio1'>
            <input type='hidden' name='reservationdate' id='reservationdate'>
            <input type='hidden' name='from' id='from'>
            <input type='hidden' name='to' id='to'>


        </div>

    </div>

    </form>

    </body>
@endsection