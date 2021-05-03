<?php
    session_start();
    include("connect/connect.php");
    if(!$_SESSION['s_id']){
        header('Location:index.php');
    }else if($_SESSION["s_grade"]=='4'){
        header('Location:mission4.php');
    }else{
?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM student4 WHERE s_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    }

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
                
           <p align="center"> <img src="assets/img/logo2.png" class="img-fluid w-25 d-none d-xl-block text-center" alt=""></p>
            
           <img src="assets/img/logo2.png" class="img-fluid w-50 d-xl-none" alt="">

           <?php
                    if(isset($_GET['status'])){
                        $status = $_GET['status'];
                ?>

                    <?php if($status == 'limit15'){ ?>
                        <div class="alert alert-danger" style="border-radius: 10px;">
                            <div class="container">
                                <b></b><i class="fas fa-bell"></i> ใช้โค้วต้าหัวใจครบ 15 ดวงแล้ว 
                            </div>
                        </div>
                   

                    <?php } else if($status == 'limit2'){ ?>
                        <div class="alert alert-danger" style="border-radius: 10px;">
                            <div class="container">
                                <b></b><i class="fas fa-bell"></i> หมดโค้วต้าให้หัวใจน้องคนนี้แล้ว
                            </div>
                        </div>
                    <?php } else if($status == 'success'){ ?>
                        <div class="alert alert-success" style="border-radius: 10px;">
                            <div class="container">
                                <b></b><i class="fas fa-heart"></i> ให้หัวใจน้องคนนี้แล้ว
                            </div>
                        </div>
                    <?php } else if($status == 'error'){ ?>
                        <div class="alert alert-danger" style="border-radius: 10px;">
                            <div class="container">
                                <b></b><i class="fas fa-bell"></i> ระบบผิดพลาด
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>

                <div class="col-xl-12 bg-white text-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">    
                    <div class="container">
                            <div class="row">
                            
                                <div class="col-xl-3">
                                    
                                </div>

                                <div class="col-xl-8">
                                   
                                </div>

                                <div class="col-xl-12">
                                <p align="center"><img src="uploads/<?php echo $row['s_pic'] ?>" class="img-fluid mt-3 w-25 d-none d-xl-block" alt=""></p>
                                    <img src="uploads/<?php echo $row['s_pic'] ?>" class="img-fluid mt-3 w-50 d-xl-none">
                                    <h4 class="text-center mt-3">เลขที่ <?php echo $row['s_number'] ?> <br>น้อง<?php echo $row['s_name']; ?> (<?php echo $row['s_nickname'] ?>)</h4>
                                    <form method="post" action="process/heart.php">
                                        <div class="form-group d-none">
                                            <label for="">ไอดีน้อง</label>
                                            <input type="text" class="form-control" name="s_id4" value="<?php echo $row['s_id'] ?>" readonly>
                                        </div>

                                        <div class="form-group d-none">
                                            <label for="">ไอดีพี่</label>
                                            <input type="text" class="form-control" name="s_id5" value="<?php echo $_SESSION['s_id'] ?>" readonly> 
                                        </div>

                                        <button class="btn btn-rose btn-round" name="submit"><i class="fas fa-heart"></i> ให้หัวใจ</button>

                                    </form>
                                    <hr>
                                    <h3 class="text-rose">ประวัติการให้หัวใจ <i class="fas fa-heart"></i> </h3>
                                    <?php
                                            $sql8 = "SELECT * FROM heart WHERE s_id4 = '$row[s_id]'";
                                            $result8 = mysqli_query($conn,$sql8);
                                            $numheart = mysqli_num_rows($result8);

                                           
                                    ?>
                                    <h5 class="text-primary">จำนวนหัวใจ <?php echo $numheart ?> ดวง</h5>
                                    <div class="row">
                                    
                                        <?php
                                            $sql2 = "SELECT * FROM heart WHERE s_id4 = '$row[s_id]'";
                                            $result2 = mysqli_query($conn,$sql2);
                                        
                                            while($fetch  = mysqli_fetch_array($result2)){
                                        ?>
                                         
                                        <?php 
                                            $sql3 = "SELECT * FROM student5 WHERE s_id = '$fetch[s_id5]'";
                                            $query = mysqli_query($conn,$sql3);
                                            $num3 = mysqli_num_rows($query);
                                            while($fetch2 = mysqli_fetch_array($query)){
                                        ?>
                                        
                                            
                                            <div class="col-xl-3 col-6 mb-3">
                                                <div class="col-xl-12  bg-white text-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #9c27b0">
                                                <br>
                                                    <img src="uploads/<?php echo $fetch2['s_pic'] ?>" class="img-fluid" alt="">
                                                    <h5>พี่<?php echo $fetch2['s_nickname'] ?><br><?php echo $fetch2['s_name'] ?></h5>
                                                    <h5 class="text-primary">จำนวนการให้ <?php echo $num3 ?></h5>

                                                    
                                                </div>
                                                
                                            </div>

                                            
                                            
                                                

                                        <?php } ?>

                                        

                                        <?php }?>
                                        
                                    </div>
                                    <hr>
                                </div>

                                <div class="col-xl-12">
                                    <a href="mission.php" class="btn btn-primary mb-3"><i class="fas fa-chevron-circle-left"></i> กลับหน้าหลัก</a>
                                </div>
                                

                            </div>
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