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
                
                  <li class="nav-item">
                    <a href="detailheart.php" class="nav-link" style="font-size: 15px;">
                      ประวัติการให้หัวใจ
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
                  <li class="nav-item">
                      <?php 
                        $sqlch = "SELECT * FROM heart WHERE s_id5 = '$_SESSION[s_id]'";
                        $resultch = mysqli_query($conn,$sqlch);
                        $numch = mysqli_num_rows($resultch);
                        if($numch == '15'){
                      ?>
                      <a href="#" class="nav-link text-white" style="background-color: #ec008c;">
                          ครบโค้วต้า
                      </a>
                      <?php }else{?>
                      <a href="#" class="nav-link text-white bg-success" >
                          เหลือหัวใจ <?php 
                              $limit = 15;
                              $re = $limit - $numch;
                              echo $re;
                          ?>
                      </a>
                      <?php }?>
                    
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