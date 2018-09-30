<?php
$conn = mysqli_connect("localhost","root", "menufi@123", "menufi");
$sql = "SELECT * FROM batter";
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
    <link href="../../assets/DataTables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/DataTables/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
        
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js">
	</script>
        <script type="text/javascript" class="init">
	


//$(document).ready(function() {
//	$('#tblMenu').DataTable( {
//		dom: 'Bfrtip',
//		buttons: [
//			'copy', 'csv', 'excel', 'pdf', 'print'
//		]
//	} );
//} );



	</script>
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
                    <h1 class="page-header">Menu-Ingredients-Addons Mapping</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <?php
            
            ?>
            
            <!-- /.row -->
            <div class="row" id="outOfStock">
				<div class="col-lg-6" style="height:300px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Add Batters
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="post" action="<?php echo base_url(); ?>index.php/Admin/addMenubatterMapping" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="pwd">Select Menu Item:</label>
                                        <select name="ddlMenu" required class="form-control">
                                            <?php 
                                            if(isset($menu)){
                                                foreach ($menu as $value) {
                                                    echo '<option value="'.$value['Menu_Id'].'">'.$value['Name'].'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="pwd">Select Addons:</label>
                                        <select name="ddlAddons" id="dates-field2" required class="form-control">
                                            
                                            <?php 
                                      //      if(isset($ing)){
                                          //      foreach ($ing as $value) {
                                           //         echo '<option value="'.$value['Ingredients_id'].'">'.$value['Name'].'</option>';
                                             //   }
                                        //    }
                                         //  ?>
                                            
                                            
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="pwd">Quantity Required:</label>
                                        <input type="text" class="form-control" id="QtyRequired" name="QtyRequired" required>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="pwd">Select Batters:</label>
                                        <select name="ddlBatters" id="dates-field2" required class="form-control">
                                            
                                            <?php 
                                            if(isset($batters)){
                                                foreach ($batters as $value) {
                                                    echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                                                }
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
				<div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Manage Batter(s)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Menu Item</th>
                                        <th>Batters Name</th>
                                        <th>Manage</th>
                                    </tr>
                                    <?php 
                                    if(isset($mapped_addons)){
                                        $i=1;
                                        foreach ($mapped_addons as $value) {
											
                                            echo '<tr><td>'.$i.'</td>';
                                            echo '<td>'.$value['Name'].'</td>';
                                            echo '<td>'.$value['batters_name'].'</td>';
                                            
                                            echo '<td><a href="'.  base_url().'index.php/Admin/v_editAddon/'.$value['id'].'" class="btn btn-warning btn-sm btnEdit"><span class="glyphicon glyphicon-pencil"></span></a>'
                                                    . '<a href="'.  base_url().'index.php/Admin/deleteBatter/'.$value['mirid'].'" class="btn btn-danger btn-sm btnDelete"><span class="glyphicon glyphicon-trash"></span></a></td>';
                                                    echo '</tr>';
                                            $i++; 
                                        }
                                    }else{
                                        echo '<tr><td>No records available.</td></tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
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

<!--     Morris Charts JavaScript 
    <script src="../../assets/vendor/raphael/raphael.min.js"></script>
    <script src="../../assets/vendor/morrisjs/morris.min.js"></script>
    <script src="../../assets/data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/dist/js/sb-admin-2.js"></script>

</body>
<script>


    function addNew(){
        let data = $('#catbox').val();
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            url: "ajax_addBatter",
            data: {
                'name':data
            },
            success: function (result) {
                if(result == 'success'){
                    window.location = '';
                }
            }
        });
    }

    function deleteBat(id){
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            url: "ajax_deleteBatter",
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
</script>
</html>
