<?php
require_once '../connection.php';

session_start();

  $search=$_POST['search'];
  $empNo='';
  $name = '';
  $tele_no = '';
  $address = '';
  $NIC = '';
  $sql="SELECT emp_no,name,tele_no,address,NIC FROM employee WHERE emp_no='$search' OR name='$search' OR tele_no='$search' OR NIC='$search'; ";
  $result = mysqli_query($conn, $sql);
  echo mysqli_num_rows($result);
  if (mysqli_num_rows($result) > 0) {
  // output data of each row
        $row = mysqli_fetch_assoc($result);
        $empNo=$row["emp_no"];
        $name = $row["name"];
        $tele_no = $row["tele_no"];
        $address = $row["address"];
        $NIC = $row["NIC"];
  }else{
    echo "<script type='text/javascript'>alert('No such Employee!')</script>";
    header("location:emp.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Employee | Yellow Enterprise</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Yellow Enterprise!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Upeksha</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="viewStock.php"><i class="fa fa-edit"></i>View Stock</a></li>
                  <li><a href="empDetails.php"><i class="fa fa-edit"></i>View Employees</a></li>
                  <li><a href="supDetails.php"><i class="fa fa-edit"></i>View Suppliers</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Modify Employee Details</Emplo>
              </div>

              <form action="modifyEmp.php" method="POST" class="form-horizontal form-label-left" novalidate>
                  <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                      <div class="input-group">
                        <input id="empNo" name="empNo" type="text" class="form-control" placeholder="Eg:- E001">
                        <span class="input-group-btn">
                          <button id="search" name="search" type="submit" class="btn btn-default" value="search">Search</button>
                        </span>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-6">
                <div class="x_panel">
                  <div>
                    <h2>Personal Info</h2>
                    <div class="x_content" id="ajaxreq">
                    <form action="modifyEmpF.php" method="POST" class="form-horizontal form-label-left" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empNo">Emp No<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="empNo" name="empNo" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" readonly="readonly" type="text" <?php echo "value='".$empNo."'>";?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" readonly="readonly"  type="text" <?php echo "value='".$name."'>";?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tele" name="tel" class="form-control col-md-7 col-xs-12" data-validate-length-range="10"  type="text" <?php echo "value='".$tele_no."'>";?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="address" id="address" name="address" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" <?php echo "value='".$address."'>";?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">NIC <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nic" name="nic" required="required" data-validate-length-range="8" class="form-control col-md-7 col-xs-12" readonly="readonly" <?php echo "value='".$NIC."'>";?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>
                      </div>
                  </div>
                  
                </div>

                
              </div>

              <div class="col-md-6 col-xs-12">
           
              
              <div class="clearfix"></div>
              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" id="ajaxreq">
                    <h2>Employee Details</h2>
                    <?php
                        require_once '../connection.php';
                           //display reservations details in a table//
                           // Select all data , display them in a table//
                           $select = "SELECT * FROM employee";
                           $result = mysqli_query($conn, $select);
                          if ( mysqli_num_rows($result) > 0) {
                            // print table heads//
                                echo ('<div class="table-responsive"><table border=1 class="table table-bordered" >
                                    <thead style="background-color:     #D3D3D3;">
                                    <tr>
                                        <th>EmpNo</th>
                                        <th>Name</th>
                                        <th>Telephone</th>
                                        <th>Address</th>
                                        <th>NIC</th>
                                    </tr></thead>');
                                    echo("<tbody>");
                                    // output data from row by row
                                    while($row = mysqli_fetch_array($result)) {
                                        echo (
                                        "<tr>
                                            <form method='POST'>
                                                <td>" . $row[0] . "</td>
                                                <td>" . $row[1] . "</td>
                                                <td>" . $row[2] . "</td>
                                                <td>" . $row[3] . "</td>
                                                <td>" . $row[4] . "</td>
                                           </form>
                                        </tr>");
                                    }
                                   echo ("</tbody></table></div>");
                        }
                        mysqli_close($conn);
                        ?>
                    
                    
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>

            
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            All Right recived by Yellow Enterprise   
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>
