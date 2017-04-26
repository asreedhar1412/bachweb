<!DOCTYPE html>
<html>
<body background="images/webbginside.jpg"> </body>
<body>
{{--<form class="form-horizontal" role="form" method="POST" action="{{ route('reports') }}">--}}
<form action="{{ url('/importExport') }}" method="get">{{csrf_field()}}
    <h2><b>Select file to upload: </b></h2>
    <button type="submit" id="upload" class="btn btn-primary"><b>Upload/Download</b></button>
</form>
</body>
</html>

