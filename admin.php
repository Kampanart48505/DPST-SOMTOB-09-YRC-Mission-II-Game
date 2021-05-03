<?php
    session_start();
    include("connect/connect.php");
    if(!$_SESSION['s_id']){
        header('Location:index.php');
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
                            <div class="col-xl-6 col-6 wow fadeInLeft">
                                <div class="col-xl-12 bg-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                    <img src="assets/img/stu4.png" class="img-fluid w-25 mt-3" alt="">
                                    <h4>จัดการนักเรียน ม.4</h4>
                                    <a href="student4.php" class="btn btn-rose w-100 mb-3">คลิก</a>
                                </div>
                            </div>

                            <div class="col-xl-6 col-6 wow fadeInRight">
                                <div class="col-xl-12 bg-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #9c27b0">
                                    <img src="assets/img/stu5.png" class="img-fluid w-25 mt-3" alt="">
                                    <h4>จัดการนักเรียน ม.5</h4>
                                    <a href="student5.php" class="btn btn-primary w-100 mb-3">คลิก</a>
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