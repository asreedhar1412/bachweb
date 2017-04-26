@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<body background="images/webbginside.jpg">
<div style="width: 100%">
    <div class="container" style="float: right; width: 80%;">
        <div class="pull-right">
            <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
        </div>
{{--<form class="form-horizontal" role="form" method="POST" action="{{ route('reports') }}">--}}
<form action="{{ url('/importExport') }}" method="get">{{csrf_field()}}
    <h2><b>Select file to upload: </b></h2>
    <button type="submit" id="upload" class="btn btn-primary"><b>Upload/Download</b></button>
</form>
    </div>
</div>
</body>
</html>
@endsection

