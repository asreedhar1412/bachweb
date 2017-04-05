    <?php
    /**
     * Created by PhpStorm.
     * User: Nisha
     * Date: 4/2/2017
     * Time: 12:48 AM
     */

    $UploadedFileName=$_FILES['fileToUpload']['name'];
    if($UploadedFileName!='')
    {
        $image = $_FILES['fileToUpload']['tmp_name'];
        $img = file_get_contents($image);
        $email = 'v.chaitra1@gmail.com';
        $role = "0";
        $con  = mysqli_connect('localhost','root','','aafrs') or die('Unable To connect');
        $sql = "insert into evidence (email,role,image) values(?,?,?)";
        $stmt = mysqli_prepare($con,$sql);
        $stmt->bind_param('sss',$email,$role,$img);
       mysqli_stmt_execute($stmt);
       $check = mysqli_stmt_affected_rows($stmt);
       print $check;
        if($check==1){
            $msg = 'Successfully Uploaded';
        }else{
            $msg = 'Could not upload';
        }
        print $msg;
        mysqli_close($con);


    //  if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$localdatabases/aarfs/evidence)){
    //      print $UploadedFileName;
    //  }
    }
    //}
    ?>