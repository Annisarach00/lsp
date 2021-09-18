<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8"/>

  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <meta name="description" content=""/>

  <meta name="author" content=""/>

  <title>BPPTIK</title>

  <!-- loader

  <link href="assets/css/pace.min.css" rel="stylesheet"/>

  <script src="assets/js/pace.min.js"></script>-->

  <!--favicon-->

  <!-- <link rel="icon" href="img/sitanik_logo.png" type="image/x-icon">-->

  <!-- simplebar CSS-->

  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>

  <!-- Bootstrap core CSS-->

  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- animate CSS-->

  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>

  <!-- Icons CSS-->

  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>

  <!-- Metismenu CSS-->

  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>

  <!-- Custom Style-->

  <link href="assets/css/app-style.css" rel="stylesheet"/>

  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">

  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

  <!--Lightbox Css-->

  <link href="assets/plugins/fancybox/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>

 

</head>



<body class="bg-theme bg-theme1">



<!-- Start wrapper-->

 <div id="wrapper">

 
<!--Start topbar header-->

<?php

  include 'header.php';

?>

<!--End topbar header-->

 <!--Start sidebar-wrapper-->

    <?php

       include 'menu.php';

    ?>

   <!--End sidebar-wrapper-->

<?php

        if(!isset($_GET['page'])){ require_once "home.php";}

        if(isset($_GET['page'])){ require_once $_GET["page"].".php";}

            else{

        if(!isset($_GET["page"])){ require_once "home.php";}

        }

    ?>

<!--End content-wrapper-->

   <!--Start Back To Top Button-->

    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

    <!--End Back To Top Button-->

	

	<!--Start footer-->

	

	<!--End footer-->

	

  </div><!--End wrapper-->

  <footer>

      <div class="container">

        <div class="text-center">

          Copyright © 2021

        </div>

      </div>

    </footer>

  



  <!-- Bootstrap core JavaScript-->

  <script src="assets/js/jquery.min.js"></script>

  <script src="assets/js/popper.min.js"></script>

  <script src="assets/js/bootstrap.min.js"></script>

	

  <!-- simplebar js -->

  <script src="assets/plugins/simplebar/js/simplebar.js"></script>

  <!-- Metismenu js -->

  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>

  

  <!-- Custom scripts -->

  <script src="assets/js/app-script.js"></script>

    <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

  <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>

  <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>

  <script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>

  <!--Lightbox-->

  <script src="assets/plugins/fancybox/js/jquery.fancybox.min.js"></script>



</body>

</html>


