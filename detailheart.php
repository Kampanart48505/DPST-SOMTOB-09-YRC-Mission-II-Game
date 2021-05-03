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
                        
                            <div class="col-xl-12 col-md-12 col-12 mb-3">
                                <div class="col-md-12 bg-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                <br>
                                <h3 class="text-rose">ประวัติการให้หัวใจ ของพี่<?php echo $_SESSION['s_nickname'] ?> <i class="fas fa-heart"></i> </h3>
                                <hr>
                                  <div class="row">
                                  <?php 
                                        $sql = "SELECT * FROM heart WHERE s_id5 = '$_SESSION[s_id]'";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                    ?>

                                    <?php 
                                        $sql2 = "SELECT * FROM student4 WHERE s_id ='$row[s_id4]'";
                                        $query = mysqli_query($conn,$sql2);
                                        while($row2 = mysqli_fetch_array($query)){

                                        

                                    ?>
                                        <div class="col-xl-4 col-md-6 col-6 mb-3 wow fadeIn">
                                            <div class="col-md-12 bg-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                                                <br>
                                                <img src="uploads/<?php echo $row2['s_pic']?>" class="img-fluid " alt="">
                                                <img src="assets/img/logo2.png" class="img-fluid w-50" style="margin-top: -50px;" alt="">
                                               
                                                <h5>น้อง<?php echo $row2['s_name']; ?> (<?php echo $row2['s_nickname'] ?>)</h5>
                                              
                                            </div>
                                        </div>

                                        
                                        <?php }?>
                                    <?php }?>
                                    </div>
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