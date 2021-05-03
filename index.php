<?php
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
    <div class="container">
    
        <div class="row">
        
            <div class="col-xl-3">
            
            </div>

            
            <div class="col-xl-6 text-center mt-5 wow fadeInUp" align="center">
                
            <img src="assets/img/logo2.png" class="img-fluid w-50" alt="">

                <?php
                    if(isset($_GET['status'])){
                        $status = $_GET['status'];
                ?>

                    <?php if($status == 'error'){ ?>
                        <div class="alert alert-danger" style="border-radius: 10px;">
                            <div class="container">
                                <b></b> เลขประจำตัวไม่ถูกต้อง ไม่ถูกต้อง !
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
                <!--div class="alert alert-danger" style="border-radius: 10px;">
                            <div class="container">
                                <b></b><i class="fas fa-bell"></i> ปิดระบบ Mission 2 แล้ว !
                            </div>
                        </div-->
          

                <div class="col-xl-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;">
                    <div class="container">
                    
                        <h3 class="text-rose">DPST SOMTOB 09</h3>
                        <h5>Mission 2 ภารกิจที่ 2</h5>
                        <a href="result-ranking.php" class="btn btn-success w-100" style="font-size: 15px;">สรุปผล Ranking Mission 2</a>
                        <hr>
                        
                        <h5 class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;ขอบคุณ🙏 น้องๆพี่ๆทุกคนที่เล่น Mission II On Web 🏆 นี้ ระหว่างการเล่นอาจจะมีปัญหาต่างๆ หรือถ้ามีข้อผิดพลาดประการใด ในฐานะคนทำ ขอโทษด้วยอย่างยิ่ง🙏</h5>
                        <h5 class="text-rose">Kampanart.ch@yupparaj.ac.th<br>ทีมพัฒนาเว็บไซต์ โรงเรียนยุพราชวิทยาลัย</h5>
                        <!--form method="post" action="process/loginact.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">เลขประจำตัวนักเรียน</label>
                                <input type="name" class="form-control" placeholder="เลขประจำตัวนักเรียน" name="s_idstu" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-rose btn-sm w-100" style="font-size:15px">เข้าสู่ระบบ</button>
                        </form-->
                        
                        
                    </div>
                    
                </div>
                <p class="text-white mt-3">&copy; 2020 All Rights Reserved - DPST SOMTOB 09 <br>238 ถนนพระปกเกล้า ตำบลศรีภูมิ อำเภอเมือง จังหวัดเชียงใหม่ 50200</p>

               
            </div>

            <div class="col-xl-3">
            
            </div>
        </div>
    </div>



    <?php
        require_once 'component/jslink.php';
    ?>




</body>
</html>