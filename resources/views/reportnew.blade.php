@extends('layouts.app')

@section('content')
<head>
    <title>Import - Export</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body background="images/webbginside.jpg">
<div style="width: 100%">
    <div class="container" style="float: right; width: 80%;">
        <div class="pull-right">
            <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
        </div>
<div>
    <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
    <form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div>
            <br>
        <input type="file" name="import_file" />
        </div>
        {{csrf_field()}}
        <br/>
        <button class="btn btn-primary">Import File</button>
    </form>
</div>
    </div>
</div>
</body>
    @endsection