<?php
    session_start();
    include("connect/connect.php");
    if(!$_SESSION['s_id']){
        header('Location:login.php');
    }else if($_SESSION["s_grade"]=='4'){
        header('Location:mission4.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        require_once 'component/head.php';
    ?>

<style>
    body{
        font-family:"Mitr";
        background-image: url(assets/img/bg.jpg);
    }
</style>
<body>
    <?php
        require_once 'component/navbar2.php';
    ?>
    <div class="container mt-5">
    
        <div class="row">
        
        

            
            <div class="col-xl-12 text-center mt-5 " align="center">
                
            <img src="assets/img/logo2.png" class="img-fluid w-25" alt="">

          

                <div class="col-xl-12" >
                    
                    
                   
                        

                        <div class="row">
                        <?php
                            $sql = "SELECT * FROM student5 ORDER BY s_id ASC";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <div class="col-xl-4 col-md-6 col-6 mb-3">
                                <div class="col-md-12 bg-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <br>
                                    <h5>No.<?php echo $row['s_number'] ?></h5>
                                    <img src="uploads/<?php echo $row['s_pic'] ?>" class="img-fluid " alt="">
                                    
                                    <h5>พี่<?php echo $row['s_name']; ?> (<?php echo $row['s_nickname'] ?>)<br></h5>
                                    <?php 
                                        $sqlch = "SELECT * FROM heart WHERE s_id5 = '$row[s_id]'";
                                        $resultch = mysqli_query($conn,$sqlch);
                                        $numch = mysqli_num_rows($resultch);
                                        if($numch == '15'){
                                    ?>
                                        <h5 class="text-danger">พี่ให้หัวใจน้องครบโค้วต้าแล้ว</h5>
                                        
                                    <?php }else{?>
                                        <?php
                                            $limit = 15;
                                            $re = $limit-$numch;
                                        ?>
                                        <h5 class="text-success">พี่เหลือหัวใจ <?php echo $re ?> ดวง</h5>
                                    <?php }?>
                                    <a href="editstudent5.php?id=<?php echo $row[0] ; ?>" class="btn btn-warning btn-sm w-100 ">แก้ไขรายละเอียด</a>
                                    <a href="history.php?id=<?php echo $row[0] ; ?>" class="btn btn-rose btn-sm w-100 mb-3">ดูประวัติการให้</a>
                                </div>
                            </div>
                        <?php }?>
                    

                        </div>
                        
                   
                    
                </div>
                <p class="text-white mt-3">&copy; 2020 All Rights Reserved - DPST SOMTOB 09 <br>238 ถนนพระปกเกล้า ตำบลศรีภูมิ อำเภอเมือง จังหวัดเชียงใหม่ 50200</p>

               
            </div>

          
        </div>
    </div>



    <?php
        require_once 'component/jslink.php';
    ?>




</body>
</html>
<?php }?>