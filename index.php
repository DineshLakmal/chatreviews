<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chat Reviews</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="dist/css/custom.css">
  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script src="bootstrap/js/custom.js"></script>
  <script src="https://code.highcharts.com/stock/highstock.js"></script>
  <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <!-- includes php config files-->
  <?php include 'backend/db-config.php';?>
  <?php include 'backend/session.php';?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">CHR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Chat</b> Reviews</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
         <!-- start log out pop up -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php  echo $profile_name;  ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/user.png" class="" alt="User Image">
                <p>
                 <?php  echo $profile_name;  ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="backend/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- end log out pop up -->

        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user.png" class="" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php  echo $profile_name;  ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="active"><a href="index.php"><i class="ion ion-stats-bars"></i>Review</a></li>
            <li><a href="#" onclick="set_view('container-topic')"><i class="ion ion-pie-graph"></i>View Topics</a></li>
            <li><a href="#" onclick="set_view('container-emotion')"><i class="ion-stats-bars"></i> View Emotions</a></li>
            <li><a href="#"  onclick="set_view('container-healthy')"><i class="ion ion-person-add"></i>View Healthy</a></li>
            <li><a href="#"  onclick="set_view('container-personal')"><i class="ion ion-pie-graph"></i>View Personal Informations
            </a></li>
          </ul>
        </li>
      
        <li class="header">Select the chatting partner</li>
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Chatting partner 1</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Chatting partner 2</span></a></li>
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Chatting partner 3</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
              <div class="row" style="width:103%">
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h4>View Topics</h4>
                        <p>
                           Current topic<br/>
                           No Of topic identified
                        </p>
                      </div>
                      <div class="icon">
                       <!--  <i class="ion ion-pie-graph"></i> -->
                      </div>
                      <a href="#" class="small-box-footer" onclick="set_view('container-topic')">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h4>View Emotions</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                      </div>
                      <div class="icon">
                       <!--  <i class="ion ion-stats-bars"></i> -->
                      </div>
                      <a href="#" class="small-box-footer" onclick="set_view('container-emotion')">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h4>View Personal Informations</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                      </div>
                      <div class="icon">
                      <!--   <i class="ion ion-pie-graph"></i> -->
                      </div>
                      <a href="#" class="small-box-footer" onclick="set_view('container-personal')">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h4>View Healthy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                      </div>
                      <div class="icon">
                       <!--  <i class="ion ion-person-add"></i> -->
                      </div>
                      <a href="#" class="small-box-footer"  onclick="set_view('container-healthy')">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  
              </div>

              <div class="row">
                <div class="col-sm-12">
                     <div class="active-container" id="container-trust">
                          <?php include 'backend/trust-analysis/index.php';?>
                      </div>
                      <div  id="container-topic">
                          <?php include 'backend/topic-detection/index.php';?>
                      </div>
                      <div id="container-emotion">
                          <?php include 'backend/emotion-extraction/index.php';?>
                      </div>
                      <div id="container-healthy">
                          <?php include 'backend/evaluate-healthy/index.php';?>
                      </div>
                      <div id="container-personal">
                          <?php include 'backend/personal-information/index.php';?>
                      </div>
                </div>
                <!--  <div class="col-sm-4">
                       <div id="container-topic-bar" style="height: 300px; width:90%;margin-left:15px;"></div>
                 </div> -->
                
              </div>
             
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy;2017 <a href="http://chatviews.com">Chat Reviews</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<script type="text/javascript">
  function set_view(element_id){  
      $(".active-container").hide();
      $("#"+element_id).addClass("active-container");
      $("#"+element_id).fadeIn(1000);
 }
</script>
<!-- ./wrapper -->
</body>
</html>
