<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Item | Yellow Enterprise</title>

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
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Stock<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../Item/addItem.php">Add New Item</a></li>
                      <li><a href="../Item/addItem.php">Item Details</a></li>
                      <li><a href="../Item/removeItem.php">Manage Stock</a></li>
                    </ul>
                  </li>
                  <li><a href="../Supplier/supplier.php"><i class="fa fa-home"></i>Manage Suppliers</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Admin Accouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../Admin/addUser.php">Add Admin</a></li>
                      <li><a href="../Admin/userDetails.php">Manage Admin</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Employee <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../Employee/addEmp.php">Add Employee</a></li>
                      <li><a href="../Employee/empDetails.php">Manage Admin</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
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
                <h3>Add Supplier</Emplo>
              </div>

              <form action="modifySup.php" method="POST" class="form-horizontal form-label-left" novalidate>
                  <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                      <div class="input-group">
                        <input id="supNo" name="supNo" type="text" class="form-control" placeholder="Eg:- S001">
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
                    <h2>Supplier Info</h2>
                    <div class="x_content" id="ajaxreq">
                    <form onsubmit="return confirm('Do you really want to add this Supplier?');" action="addSupplierF.php" method="POST" class="form-horizontal form-label-left" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empNo">Supplier No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="supNo" name="supNo" class="form-control col-md-7 col-xs-12" required="required" placeholder="Eg:- S001" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Supplier Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" name="address" class="form-control col-md-7 col-xs-12" data-validate-length-range="10,100"  required="required" type="textArea">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" name="phone" class="form-control col-md-7 col-xs-12" data-validate-length-range="10"  required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Add</button>
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
                    <h2>Supplier Details</h2>
                    <?php
                        require_once '../connection.php';
                           //display reservations details in a table//
                           // Select all data , display them in a table//
                           $select = "SELECT * FROM suppliers";
                           $result = mysqli_query($conn, $select);
                          if ( mysqli_num_rows($result) > 0) {
                            // print table heads//
                                echo ('<div class="table-responsive"><table border=1 class="table table-bordered" >
                                    <thead style="background-color:     #D3D3D3;">
                                    <tr>
                                        <th>SupNo</th>
                                        <th>Supplier Name</th>
                                        <th>Address</th>
                                        <th>Telephone</th>
                                    <th></th>
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
                                                <td>
                                                
                                                <a href='#' id='$row[0]' class='deleteuser'><button value=''>delete</button></a>
                                                </td>
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
