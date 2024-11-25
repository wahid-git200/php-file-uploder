<?php
    session_start();
    $msg_ok=null;
    $msg_wrong=null;

    if(isset($_POST["submit"]) && !empty($_POST["submit"])){
        if(isset($_POST["file"]) && !empty($_POST["file"])){
            $_SESSION['msg_ok']="successfully uploaded";
        }
        else
            $_SESSION['msg_wrong']="pleas choose a file!";
    }
    header("location:index.php")

?>

