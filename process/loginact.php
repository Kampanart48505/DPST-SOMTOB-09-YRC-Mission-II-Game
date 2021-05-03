<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $s_idstu = mysqli_real_escape_string($conn,$_POST['s_idstu']);
        $sql = "SELECT * FROM student4 WHERE s_idstu = '$s_idstu'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
            $_SESSION['s_name'] = $row['s_name'];
            $_SESSION['s_nickname'] = $row['s_nickname'];
            $_SESSION['s_idstu'] = $row['s_idstu'];
            $_SESSION['s_id'] = $row['s_id'];
            $_SESSION['s_number'] = $row['s_number'];
            $_SESSION['s_grade'] = $row['s_grade'];
            header("location:../mission4.php");
        }else{
            $sql2 = "SELECT * FROM student5 WHERE s_idstu = '$s_idstu'";
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);
            if($row2 > 0){
                $_SESSION['s_name'] = $row2['s_name'];
                $_SESSION['s_nickname'] = $row2['s_nickname'];
                $_SESSION['s_idstu'] = $row2['s_idstu'];
                $_SESSION['s_id'] = $row2['s_id'];
                $_SESSION['s_number'] = $row2['s_number'];
                $_SESSION['s_status'] = $row2['s_status'];
                $_SESSION['s_grade'] = $row2['s_grade'];
                if($_SESSION['s_status'] == 'U'){
                    header("location:../mission.php");
                }else if($_SESSION['s_status'] == 'A'){
                    header("location:../admin.php");
                }
            }else{
                header("location:../index.php?status=error");
            }
        }
    }

?>