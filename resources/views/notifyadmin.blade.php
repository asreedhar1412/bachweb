@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.groundstaffsidebar')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('groundstaff') }}">
        <div class="container" style="float:right;width:80%">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>
            <h1><b>&nbsp &nbsp Notify Admin</b></h1>

        <div class="table-responsive" >
                <table style="width: 50%" >
                    <tr>
                        <td class="text-center"> <b>Field Name</b></td>
                        <td class="text-center"><input type='text' name='fieldname' id='fieldname' /></td> <br><br>
                    </tr>
                    <tr>
                        <td>
                            &nbsp
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><b>Time</b></td>
                        <td class="text-center"><input type='text' name='time' id='time' /></td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><b>Field Status</b></td>
                        <td class="text-center"><input type="radio" name="rating" value="Clean" /> <b>Clean</b><br> <br> </td>
                        <td class="text-center"><input type="radio" name="rating" value="Unclean" /> <b>Unclean</b><br> <br> </td>
                    </tr>
                    <tr>
                        <td class="text-center"><b>Comment</b></td>
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
                            <input class="btn btn-primary" type='submit' value='Send'  />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </form>
    </div>
        </body>

@endsection