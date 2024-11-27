<?php
    session_start();
    $msg_ok=null;
    $msg_wrong=null;

    if(isset($_POST["submit"]) && !empty($_POST["submit"])){
        if(isset($_FILES["file"]) && !empty($_FILES["file"]['name'])){
            
            $fileName=$_FILES['file']['name'];
            $fileNameEx=explode('.',$fileName);
            $finalFileExtention='.'.strtolower(end($fileNameEx));
            $newFileName=md5(time().$fileName).$finalFileExtention;

            $fileSize=$_FILES['file']['size'];
            $allowsFileSize=5*1024*1024; //5MB
            if($fileSize<$allowsFileSize){

                $allwosFileExtention=['.png','.jpg','.doc','.pptx','.gif','.jpeg','.rar','.zip'];
                if(in_array($finalFileExtention,$allwosFileExtention)){ 
                    
                    $uploadFIleDir='uploded_files/';
                    $path =$uploadFIleDir.$newFileName;
                    $filePate=$_FILES['file']['tmp_name'];
                    if(move_uploaded_file($filePate,$path))
                        $_SESSION['msg_ok']="Successfully uploaded";
                    else{
                        $_SESSION['msg_wrong']="Your file dose not saved!";
                    } 
                }else{  
                    $_SESSION['msg_wrong']="Your file is not allwo to upload.";
                }
            }else{
                $_SESSION['msg_wrong']="File must be less then 5MB!";
            }
        }
        else
            $_SESSION['msg_wrong']="Please choose a file!";
    }
    header("location:index.php")
?>

