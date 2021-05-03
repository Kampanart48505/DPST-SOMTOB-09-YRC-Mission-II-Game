<nav class="navbar navbar-inverse navbar-expand-lg bg-light fixed-top" style="border-bottom:5px solid #e91e63" role="navigation-demo">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-translate">
                <a class="navbar-brand" href="mission.php">DPST SOMTOB Mission II</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto" >
                
                  
                  <?php
                      $sqlchheart = "SELECT * FROM heart WHERE s_id4 = '$_SESSION[s_id]'";
                      $querychheart = mysqli_query($conn,$sqlchheart);
                      $numchheart = mysqli_num_rows($querychheart);
                  ?>
                  <li class="nav-item">
                    <a href="myheart.php" class="nav-link bg-success text-white" style="font-size: 15px;">
                        จำนวนหัวใจได้รับ <?php echo $numchheart; ?> ดวง
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="myheart.php" class="nav-link" style="font-size: 15px;">
                      ประวัติการรับหัวใจ
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link" style="font-size: 15px;">
                    <?php echo $_SESSION['s_name'] ?>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="process/logout.php" class="nav-link" style="font-size: 15px;">
                      ออกจากระบบ
                    </a>
                  </li>
                  
                  
                  <!--li class="nav-item">
                    <a href="javascript:;" class="btn btn-rose btn-raised btn-fab btn-round" data-toggle="dropdown">
                      <i class="material-icons">email</i>
                    </a>
                  </li-->
                  
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-->
          </nav>