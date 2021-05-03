<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['s_id'] == ''){
        header("location:../admin.php?status=notfoundid");
    }
    $s_id = $_POST['s_id'];
    $s_number  = $_POST['s_number'];
    $s_idstu = $_POST['s_idstu'];
    $s_name = $_POST['s_name'];
    $s_nickname = $_POST['s_nickname'];
    $s_tel = $_POST['s_tel'];

    $sql = "UPDATE student4 SET
    s_number = '$s_number',
    s_idstu = '$s_idstu',
    s_name = '$s_name',
    s_nickname = '$s_nickname',
    s_tel = '$s_tel'
    WHERE s_id = '$s_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:../student4.php?status=successedit");
    }else{
        header("location:../student4.php?status=erroredit");
    }


?>