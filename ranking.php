<?php
    session_start();
    include("connect/connect.php");
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
        require_once 'component/navbar.php';
    ?>
    
    <div class="container mt-5">
    
        <div class="row">
        
        

            
            <div class="col-xl-12 text-center mt-3 " align="center">
                
            <p align="center"> <img src="assets/img/logo2.png" class="img-fluid w-25 d-none d-xl-block text-center" alt=""></p>
            
           <img src="assets/img/logo2.png" class="img-fluid w-50 d-xl-none" alt="">


          

                <div class="col-xl-12 bg-white text-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #9c27b0" >
                    <div class="container">
                        <br>
                        <h3 class="text-rose">สรุปผล Ranking Mission II</h3>
                        <a href="index.php" class="btn btn-primary btn-sm">กลับหน้าหลัก</a>
                        <hr>
                        
            
      
                        <!-- start rank1 -->
                        <?php
                            $sql = "SELECT * FROM student4 WHERE s_number = '12'";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result); 
                        ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-md-6 mb-3">
                                <div class="col-md-12" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <br>
                                    <h3 class="text-primary">อันดับที่ 1</h3>
                                    <img src="uploads/<?php echo $row['s_pic'] ?>" class="img-fluid" alt="">
                                    <img src="assets/img/logo2.png" class="img-fluid w-50" style="margin-top: -50px;" alt="">
                                    <h4 class="text-rose">น้อง<?php echo $row['s_nickname']; ?> <?php echo $row['s_name']; ?></h4>
                                    <?php
                                        $sqlnum = "SELECT * FROM heart WHERE s_id4 = '$row[s_number]'";
                                        $query = mysqli_query($conn,$sqlnum);
                                        $numch = mysqli_num_rows($query);
                                    ?>
                                    <h4><?php echo $numch ?> ดวง</h4>
                                </div>
                            </div>
                        </div>                 
                        <!-- end rank 1 -->

                        <!-- start rank2 -->
                        <?php
                            $sql2 = "SELECT * FROM student4 WHERE s_number = '24'";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_array($result2); 
                        ?>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-3">
                                <div class="col-md-12" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <br>
                                    <h3 class="text-primary">อันดับที่ 2</h3>
                                    <img src="uploads/<?php echo $row2['s_pic'] ?>" class="img-fluid" alt="">
                                    <img src="assets/img/logo2.png" class="img-fluid w-50" style="margin-top: -50px;" alt="">
                                    <h4 class="text-rose">น้อง<?php echo $row2['s_nickname']; ?> <?php echo $row2['s_name']; ?></h4>
                                    <?php
                                        $sqlnum2 = "SELECT * FROM heart WHERE s_id4 = '$row2[s_number]'";
                                        $query2 = mysqli_query($conn,$sqlnum2);
                                        $numch2 = mysqli_num_rows($query2);
                                    ?>
                                    <h4><?php echo $numch2 ?> ดวง</h4>
                                </div>
                            </div>

                            <?php
                            $sql3 = "SELECT * FROM student4 WHERE s_number = '3'";
                            $result3 = mysqli_query($conn,$sql3);
                            $row3 = mysqli_fetch_array($result3); 
                        ?>

                            <div class="col-xl-3 col-md-6 mb-3">
                                <div class="col-md-12" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <br>
                                    <h3 class="text-primary">อันดับที่ 3</h3>
                                    <img src="uploads/<?php echo $row3['s_pic'] ?>" class="img-fluid" alt="">
                                    <img src="assets/img/logo2.png" class="img-fluid w-50" style="margin-top: -50px;" alt="">
                                    <h4 class="text-rose">น้อง<?php echo $row3['s_nickname']; ?> <?php echo $row3['s_name']; ?></h4>
                                    <?php
                                        $sqlnum3 = "SELECT * FROM heart WHERE s_id4 = '$row3[s_number]'";
                                        $query3 = mysqli_query($conn,$sqlnum3);
                                        $numch3 = mysqli_num_rows($query3);
                                    ?>
                                    <h4><?php echo $numch3 ?> ดวง</h4>
                                </div>
                            </div>

                            <?php
                            $sql4 = "SELECT * FROM student4 WHERE s_number = '17'";
                            $result4 = mysqli_query($conn,$sql4);
                            $row4 = mysqli_fetch_array($result4); 
                        ?>

                            <div class="col-xl-3 col-md-6 mb-3">
                                <div class="col-md-12" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <br>
                                    <h3 class="text-primary">อันดับที่ 4</h3>
                                    <img src="uploads/<?php echo $row4['s_pic'] ?>" class="img-fluid" alt="">
                                    <img src="assets/img/logo2.png" class="img-fluid w-50" style="margin-top: -50px;" alt="">
                                    <h4 class="text-rose">น้อง<?php echo $row4['s_nickname']; ?> <?php echo $row4['s_name']; ?></h4>
                                    <?php
                                        $sqlnum4 = "SELECT * FROM heart WHERE s_id4 = '$row4[s_number]'";
                                        $query4 = mysqli_query($conn,$sqlnum4);
                                        $numch4 = mysqli_num_rows($query4);
                                    ?>
                                    <h4><?php echo $numch4 ?> ดวง</h4>
                                </div>
                            </div>

                            <?php
                            $sql5 = "SELECT * FROM student4 WHERE s_number = '18'";
                            $result5 = mysqli_query($conn,$sql5);
                            $row5 = mysqli_fetch_array($result5); 
                        ?>

                            <div class="col-xl-3 col-md-6 mb-3">
                                <div class="col-md-12" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <br>
                                    <h3 class="text-primary">อันดับที่ 5</h3>
                                    <img src="uploads/<?php echo $row5['s_pic'] ?>" class="img-fluid" alt="">
                                    <img src="assets/img/logo2.png" class="img-fluid w-50" style="margin-top: -50px;" alt="">
                                    <h4 class="text-rose">น้อง<?php echo $row5['s_nickname']; ?> <?php echo $row5['s_name']; ?></h4>
                                    <?php
                                        $sqlnum5 = "SELECT * FROM heart WHERE s_id4 = '$row5[s_number]'";
                                        $query5 = mysqli_query($conn,$sqlnum5);
                                        $numch5 = mysqli_num_rows($query5);
                                    ?>
                                    <h4><?php echo $numch5 ?> ดวง</h4>
                                </div>
                            </div>

                        </div>                 
                        <!-- end rank 2 -->
                       

                      
                        
                </div>
                <br>
                    
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
