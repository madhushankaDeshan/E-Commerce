<?php
include "../../header.php";
include "../../mainSlideBar.php";

?>
<?php
$msg = "";

if (isset($_POST['upload'])){

    $target ="upload/".basename($_FILES['image']['name']);

    echo $target;

    $db = mysqli_connect("localhost","root","1234","ecommerce","3306");
    $itemCode = $_POST['itemCode'];
    $itemName = $_POST['itemName'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image =$_FILES['image']['name'];
    $text= $_POST['text'];

    $sql = "insert into images (itemCode,itemName,category,brand,price,discount,image,text)VALUES ('$itemCode','$itemName','$category','$brand','$price','$discount','$image','$text')";
    mysqli_query($db,$sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg = "image has been saved";
    }else{
        $msg = "failed";
    }

}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Item </title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <!-- Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Item Form
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Item</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <div id="content">



                            <form method="post" action="addItem.php" enctype="multipart/form-data" role="form" id="frmAddItem">
                                <input type="hidden" name="size" value="1000000">


                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="txtItemCode">Item Code</label>
                                        <input type="text" class="form-control" name="itemCode" id="txtItemCode" placeholder="Enter  ITEM CODE here">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtItemName">Item Name</label>
                                        <input type="text" class="form-control" name="itemName" id="txtItemName" placeholder="Enter  ITEM NAME here">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtCategory">Category</label>
                                        <input type="text" class="form-control" name="category" id="txtCategory" placeholder="Enter  CATEGORY here">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtBrand">Brand</label>
                                        <input type="text" class="form-control" id="txtBrand" name="brand" placeholder="Enter  BRAND here">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtPrice">Price</label>
                                        <input type="number" class="form-control" id="txtPrice" name="price" placeholder="Enter PRICE here">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtDiscount">Discount</label>
                                        <input type="number" class="form-control" name="discount" id="txtDiscount" placeholder="Enter PRICE here">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtDescription">Description</label>
                                        <input type="text" class="form-control" name="text" id="txtDescription" placeholder="Enter DESCRIPTION here">
                                    </div>


                                    <div class="form-group">
                                        <label for="choosePhoto">Choose Photo</label>
                                        <input type="file" class="form-control" name="image" id="choosePhoto" placeholder="choose PHOTO here">
                                    </div>


                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <input type="submit" name="upload" class="btn btn-primary" value="upload image">
<!--                                    <button type="submit" name="upload" class="btn btn-primary" id="btnAddItem"> Save </button>-->
                                </div>

                                <script src="../../build/js/ajax%20script.js"></script>
                            </form>
                            </div>
                        </div>
                        <!-- /.box -->


                    </div>
                    <!--/.col (left) -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </section>


        </section>

    </div>
    <!-- /.content-wrapper -->
    <?php
    include "../../footer.php";

    include "../../subSlideBar.php";
    ?>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../bower_components/raphael/raphael.min.js"></script>
<script src="../../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!--<script src="../../build/js/ajax%20script.js"></script>-->
<script src="../../build/js/ajax%20script.js"></script>
</body>
</html>

