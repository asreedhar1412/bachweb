<!DOCTYPE html>
<html>
<body>
{{--<form class="form-horizontal" role="form" method="POST" action="{{ route('dataevidence') }}">--}}
<form action="uploadreports.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

