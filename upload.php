<?php
if(isset($_POST['submit'])){
    $file=$_FILES['file'];
   
    $filename=$file['name'];
    $filetype=$file['type'];
    $filesize=$file['size'];
    $filetmpname=$file['tmp_name'];
    $fileerror=$file['error'];

    $fileExt= explode('.',$filename);
    $fileactext = strtolower(end($fileExt));
    $allowed =['jpg','jpeg','png','gif'];
    if(in_array($fileactext, $allowed)){
        if($fileerror===0){
            if($filesize<200000){
                $filenamenew= uniqid('', true).".".$fileactext;
                $filedest= 'uploads/'.$filenamenew;
                move_uploaded_file($filetmpname,$filedest);
                header("location: profile.php?success");


            } else{

                echo "file too big";
            }
        

        } else{
           echo "error. please check";
        }

    } else{
        echo "you cannot upload. wrong format";

    }
}
?>