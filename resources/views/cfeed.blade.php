@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.customersidebar')

        <br>
        <div class="table-responsive">
            <table style="width: 70%;" border="2">
                <tr>
                    <td style="width: 20%">
                        <span class="text-center"><h2 style="color: black">Customer Feedback</h2></span>
                    </td>
                    <td style="width: 70%;color: black" class="text-center">

                        Albuquerque Athletic Field Reservation System

                    </td>
                </tr>
            </table>


        </div>

    </div>
    </div>

    <h4> Rate our services on a scale of 1-5 (5 being the highest and 1 being the lowest). </h4>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('customer') }}">
        <center>

            <input type="radio" name="rating" value="1"> 1 <br>
            <input type="radio" name="rating" value="2"> 2 <br>

            <input type="radio" name="gender" value="3"> 3<br>
            <input type="radio" name="gender" value="4"> 4<br>
            <input type="radio" name="gender" value="5"> 5
        </center>

        <div class="table-responsive" >
            <table style="width: 50%" >
                <tr>
                    <td class="text-center">Name:</td>
                    <td class="text-center"><input type='text' name='name' id='name' /></td>
                </tr>
                <tr>
                    <td class="text-center">Email:</td>
                    <td class="text-center"><input type='text' name='email' id='email' /></td>
                </tr>
                <tr>
                    <td class="text-center">Website:</td>
                    <td class="text-center"><input type='text' name='website' id='website' /></td>
                </tr>
                <tr>
                    <td class="text-center">Comment:</td>
                    <td class="text-center"><textarea name='comment' id='comment'></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!--                <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />
 -->           </td>
                    <td>
                        <input type='submit' value='Submit'  />
                    </td>
                </tr>
            </table>

        </div>
    </form>
    </body>

@endsection