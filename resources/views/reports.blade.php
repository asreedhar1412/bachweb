<!DOCTYPE html>
<html>
<body>
{{--<form class="form-horizontal" role="form" method="POST" action="{{ route('reports') }}">--}}
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Report" name="submit">
</form>

</body>
</html>

