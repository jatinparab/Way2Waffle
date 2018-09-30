<?php
    $conn = mysqli_connect("localhost","root", "menufi@123", "menufi");
   // echo $id;
    
        $sql = "SELECT * FROM assets";

    
    $res = $conn -> query($sql);

?>
<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>Menu Fi</title>



    <!-- Bootstrap Core CSS -->

    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="../../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="../../assets/vendor/morrisjs/morris.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>



<body>



    <div id="wrapper">



        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Menu Fi</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>index.php/Admin/changePwd"><i class="fa fa-sign-out fa-fw"></i> Change Password</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index.php/Admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           <?php include 'nav_links.php'; ?>
            <!-- /.navbar-static-side -->
        </nav>



        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Inventory</h1>
                    </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

            

            <?php

            

            ?>

            

            <!-- /.row -->

            <div class="row">
            <?php
            $sql2 = "SELECT * FROM assetCategories";
            $res2 = $conn -> query($sql2);
            

            
            ?>
            <?php
            while($row2=$res2->fetch_assoc()){

            
            
            ?>
            <button onclick="filterasset('<?=$row2['name']?>')" class="btn btn-lg"><?=$row2['name']?></button>
            <?php } ?>

            </div>
            <div class="row" id="outOfStock">
            
<br>
                <div class="col-lg-12">

                    <div class="panel panel-info">

                        <div class="panel-heading">

                            Inventory Items

                        </div>

                        <!-- /.panel-heading -->

                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table table-responsive table-hover table-sm" id="MenuTable">

                                        <thead>

                                        <tr>

                                          <th colspan="3">

                                            <h2></h2>

                                          </th>

                                        </tr>

                                        <tr>

                                          <th>Name</th>

                                          <th>Price</th>
                                        <th>Quantity</th>
                                          <th>Category</th>
                                          <th>Action</th>
                                         
                                          <!-- <th>   Reorder</th> -->

                                        </tr>

                                        </thead>

                                        <tbody>

                                      <?php

                                      while($row=$res->fetch_assoc()) {

                                        $id = $row['category_id'];
                                          $sql2 = "SELECT * FROM assetCategories WHERE id=$id";
                                          $res2 = $conn -> query($sql2);
                                          //
                                          $row2 = $res2 -> fetch_assoc();

                                      ?>

                                          <tr class="asset <?=$row2['name']?>">

                                          <td><?=$row['name']?></td>

                                          <td><?=$row['price']?></td>
                                          <td><?=$row['quantity']?></td>



                                          <td><?php

                                          
                                          echo $row2['name'];
                                          ?></td>
                                       

                                          <td>
                                            &nbsp;&nbsp;<button onclick="deleteAsset(<?=$row['id']?>)" type="button"  class="btn btn-danger btn-sm "><span class="glyphicon glyphicon-trash"></span></button></td>
                                             
                                            
                                           <!--  <td> <a href="#" class="btn btn-success btn-sm">
                                             <span class="glyphicon glyphicon-ok"></span> Order
                                             </a></td> -->
                                        </tr>



                                      <?php



                                      }

                                      ?>





                                      </tbody>

                                    </table>

                            </div>

                            <!-- /.table-responsive -->

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-6 -->

                

                <!-- /.col-lg-6 -->

            </div>

            

            

            

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->



    <!-- jQuery -->

    <script src="../../assets/vendor/jquery/jquery.min.js"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="../../assets/vendor/metisMenu/metisMenu.min.js"></script>



    <!-- Morris Charts JavaScript -->

    <script src="../../assets/vendor/raphael/raphael.min.js"></script>

    <script src="../../assets/vendor/morrisjs/morris.min.js"></script>

    <script src="../../assets/data/morris-data.js"></script>



    <!-- Custom Theme JavaScript -->

    <script src="../../assets/dist/js/sb-admin-2.js"></script>



</body>

<script>
    $('document').ready(function(){
        $('.btnEdit').click(function(e){
            e.preventDefault();
            var inv_id = $(this).attr('id');
            
            window.location.href = '<?php echo base_url(); ?>index.php/Admin/editInventoryView/'+inv_id;
//            $.ajax({
//                type: 'POST',
//                url:'<?php echo base_url(); ?>index.php/Admin/editMenu/',
//                data: {'menu_id':menu_id},
//                cache: false,
//                success: function(resp){
//                }
//            });
        });
        
        $('.btnDelete').click(function(){
            var inv_id = $(this).attr('id');
            window.location.href = '<?php echo base_url(); ?>index.php/Admin/deleteInventory/'+inv_id;
        });
        
    });
    function deleteAsset(id){
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            url: "ajax_deleteAsset",
            data: {
                'id':id
            },
            success: function (result) {
                if(result == 'success'){
                    window.location = '';
                }
            }
        });
    }
    function filterasset(category){
        
                            if (category == '') {
                                $(".asset").removeClass('hidden');
                                return;
                            }
                            category = category.replace(/\s/g, "");
                            $('.asset').addClass('hidden');
                            $('.' + category).removeClass('hidden');
                        
    }
</script>

</html>

