@extends('layouts.app')

@section('content')

    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.customersidebar')

        <br>
      <div>
          <h1><b>&nbsp &nbsp Customer Feedback</b></h1>

    </div>
    </div>

    <h4><i> &nbsp &nbsp Rate our services on a scale of 1-5 (5 being the highest and 1 being the lowest).</i> </h4>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('customer') }}">
    <div>
        &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="radio" name="rating" value="1"> 1 <br>
        &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="radio" name="rating" value="2"> 2 <br>
        &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="radio" name="gender" value="3"> 3<br>
        &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="radio" name="gender" value="4"> 4<br>
        &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="radio" name="gender" value="5"> 5
    </div>
        <br>


        <div class="table-responsive" >
            <table style="width: 50%" >
                <tr>
                    <td class="text-center">Name:</td>
                    <td class="text-center" ><input type='text' name='name' id='name' /></td>
                </tr>
                <tr>
                    <td>
                        &nbsp
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Email:</td>
                    <td class="text-center"><input type='text' name='email' id='email' /></td>
                </tr>
                <tr>
                    <td>
                        &nbsp
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Website:</td>
                    <td class="text-center"><input type='text' name='website' id='website' /></td>
                </tr>
                <tr>
                    <td>
                        &nbsp
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Comment:</td>
                    <td class="text-center"><textarea name='comment' id='comment'></textarea></td>
                </tr>
                <tr>
                    <td>
                        &nbsp
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </td>

                    <td>
                        <input class="btn btn-primary" type='submit' value='Submit'  />
                    </td>
                </tr>
            </table>

        </div>
    </form>
    </body>

@endsection