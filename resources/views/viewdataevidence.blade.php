@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.head')
        <div class="container" style="float: right; width: 80%; ">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-1">

                    <h1>View data evidence</h1>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="bg-info">
                            <th>email</th>
                            <th>role</th>
                            <th>image/th> </tr>
                        <tr>
                            <td><?php echo ($evidence['email']); ?></td>
                            <td><?php echo ($evidence['role']); ?></td>
                            <td><?php echo ($evidence['image']); ?></td>
                        </tr>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection