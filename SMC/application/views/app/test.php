<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/css/ionicons.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/css/AdminLTE.min.css"><!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/css/skins/skin-red.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .codemeet{
        float: left;
        height: 51px;
        width: 51px;
      }
    </style>
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-red layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="../../index2.html" class="navbar-brand"><b>SHC</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- /.messages-menu -->

                  <!-- Notifications Menu -->
                  
                  <!-- Tasks Menu -->
                  
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal">
                      <!-- The user image in the navbar-->
                      
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="" >Login</span>
                    </a>
                    
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          

          <!-- Main content -->
          <section class="content">
<br/>
<?php 
if(isset($mess))
{
  echo "<h3>".$mess."</h3>";
}

?>


<h2>TATA MEMORIAL HOSPITAL</h2>
          
              <img class="responsive"  src="https://sites.create-cdn.net/siteimages/33/4/9/334928/7405642.jpg" alt="User Avatar">
<div class="box">
  <div class="box-header"></div>
</div>

   <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">CONTACT US</h3>
                </div>

                <div class="box-body">
                
<p>
Dr. E Borges Road, Parel, Mumbai - 400 012 India<br>

Tel. +91-22- 24177000, 24146750 - 55<br>

Fax: +91-22-24146937<br>

E-mail : msoffice@tmc.gov.in  (for patient care and queries)
              hrd@tmc.gov.in (for administrative - HRD matters)
              
</p>
                </div>
              </div>
              
  
              

         
          
            
            <!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            
          </div>
          <strong>Copyright &copy; 2017-2018 <a href="http://almsaeedstudio.com">HMS | SHC </a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <p><form action="<?php echo base_url(); ?>app/ch_login" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="r_number" id="r_number" placeholder="Reg No">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pin" id="pin" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- /.col -->
            <center>
              <button type="submit" class="btn btn-primary ">Sign In</button>
            <!-- /.col -->
            </center>
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"> Sign in using aadhar card</a>
        </div><!-- /.social-auth-links -->

        
        <a href="register.html" class="text-center">Register a new membership</a>
</p>
      </div>
      
    </div>

  </div>
</div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>meet/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>meet/AdminLTE/bootstrap/js/bootstrap.min.js"></script><!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>meet/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>meet/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>meet/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>meet/AdminLTE/dist/js/demo.js"></script>
  </body>
</html>
