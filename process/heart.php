<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $s_id4 = $_POST['s_id4'];
        $s_id5 = $_POST['s_id5'];
        $sql = "SELECT * FROM heart WHERE s_id4 = '$s_id4' AND s_id5 = '$s_id5'";
        
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num == '2'){
            header("location:../detailstudent4.php?id=$s_id4&status=limit2");
        }else{
            $sql2 = "SELECT * FROM heart WHERE s_id5 = '$s_id5'";
            $result2 = mysqli_query($conn,$sql2);
            $num2 = mysqli_num_rows($result2);
            if($num2 == '15'){
                header("location:../detailstudent4.php?id=$s_id4&status=limit15");
            }else{
                $sql3 = "INSERT INTO `heart` (`h_id`, `s_id4`, `s_id5`) 
                VALUES (NULL, '$s_id4', '$s_id5')";
                $query = mysqli_query($conn,$sql3);
                if($query){
                    header("location:../detailstudent4.php?id=$s_id4&status=success");
                }else{
                    header("location:../detailstudent4.php?id=$s_id4&status=error");
                }
            }
        }

    }



?>