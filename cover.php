<?php
    session_start();
    include("connect/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.typekit.net/ply8pcr.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Niramit|Pattaya|Pridi|Sarabun|Athiti|Chakra+Petch|K2D|Krub|Mitr|Pridi|Athiti&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    
    
    <script src="assets/js/wow.js"></script>
    <script>
         new WOW().init();
    </script>

     <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "oLanguage": {
                    "sLengthMenu": "แสดงน้อง _MENU_ คน ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดงทั้งหมด _START_ ถึง _END_ คน จาก _TOTAL_ คน",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหาน้อง :"
            }
            });
        } );
        </script>
        <!--start js files-->
<script defer src="assets/js/brands.js"></script>
<script defer src="assets/js/solid.js"></script>
<script defer src="assets/js/fontawesome.js"></script>

<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-kit.js" type="text/javascript"></script>
<!--end js files-->
<script src="assets/js/dropzone.js"></script>

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Mitr";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
        min-height: 29.7cm;
  
        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage1 {
     
      
        height: 14.85cm;
        background-image: url(assets/img/bg.jpg);
        background-position: center;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<body>
<?php
    $sql = "SELECT * FROM student4 ORDER BY s_id ASC";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){

?>



<div class="book">
    <div class="page">
        <div class="subpage1">
          
               <div class="container">
                   <div class="row justify-content-center">
                        <div class="col-xl-11 col-md-10 bg-white mt-3 " style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-radius: 15px;border-bottom:5px solid #e91e63">
                            <div class="col-xl-12 my-4">
                            <br>
                                <div class="row">
                                   
                                
                                    <div class="col-xl-12 col-md-12">
                                        <h1 class="text-rose text-center"><?php echo $row['s_nickname'] ?></h1>
                                        <h3 class="text-primary text-center"><?php echo $row['s_name'] ?></h3>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <br>
                                        <h5 class="text-center">DPST SOMTOB 09 2020 | พสวท.สมทบ ห้อง 9 ปี 2563<br>Yupparaj Wittayalai School</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
         
                   </div>
               </div>
           
        </div>    
    </div>
</div>
    
<?php }?>
</body>
</html>