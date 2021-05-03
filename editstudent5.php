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
        $sql = "SELECT * FROM student5 WHERE s_id = '$id'";
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
                
            <img src="assets/img/logo2.png" class="img-fluid w-25" alt="">

          

                <div class="col-xl-12 bg-white text-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                  
                    
                   
                        

                        <div class="row">
                            <div class="col-xl-12">

                                <h5>แก้ไขรายละเอียด<br>พี่<?php echo $row['s_name']; ?> (<?php echo $row['s_nickname'] ?>)</h5>
                                <div class="row">
                                    <div class="col-xl-3"></div>

                                        <div class="col-xl-6">
                                            <form method="post" action="process/edits5act.php" enctype="multipart/form-data">
                                                <div class="form-group d-none">
                                                    <label for="exampleInputEmail1">ไอดีการแก้ไข</label>
                                                    <input type="name" class="form-control" value="<?php echo $row['s_id'] ?>" name="s_id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">เลขที่</label>
                                                    <input type="name" class="form-control" value="<?php echo $row['s_number'] ?>" name="s_number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">เลขประจำตัวนักเรียน</label>
                                                    <input type="name" class="form-control" value="<?php echo $row['s_idstu'] ?>" name="s_idstu">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                                                    <input type="name" class="form-control" value="<?php echo $row['s_name'] ?>" name="s_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ชื่อเล่น</label>
                                                    <input type="name" class="form-control" value="<?php echo $row['s_nickname'] ?>" name="s_nickname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">เบอร์</label>
                                                    <input type="name" class="form-control" value="<?php echo $row['s_tel'] ?>" name="s_tel">
                                                </div>
                                              
                                                <button type="submit" name="submit" class="btn btn-rose btn-sm w-100" style="font-size:15px">แก้ไขรายละเอียดพี่</button>
                                            </form>

                                            <form action="process/upload5.php?id=<?php echo $row['s_id'] ?>" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>

                                        </div>

                                    <div class="col-xl-3"></div>
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