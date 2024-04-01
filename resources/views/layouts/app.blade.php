<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Bootstrap -->
    <link href='{{ asset("components/bootstrap/dist/css/bootstrap.min.css") }}' rel="stylesheet">
	 
	  <link href='{{ asset("components/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css") }}' rel="stylesheet">
	  	
    <!-- Font Awesome -->
    <link href='{{ asset("components/css/font-awesome/css/font-awesome.min.css") }}' rel="stylesheet"> 
    <!-- Custom Theme Style -->
    <link href='{{ asset("components/css/custom.min.css") }}' rel="stylesheet">
  </head>
   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/dashboard') }}" class="site_title"><i class="fa fa-cubes"></i> 
			  <span>BLOG</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src='{{ asset("components/images/user.png")}}' alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome to my,</span>
                <h2>BLOG</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>About me</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Main </a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/eventlist') }}">All blogs</a></li>   
                    </ul>
                  </li>          
                </ul>
              </div>  
            </div>
            <!-- /sidebar menu -->

          
          </div>
        </div>

        
        <!-- page content -->
        <div class="right_col" role="main">



            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="dashboard_graph x_panel">                  
                    <div class="col-md-6">
                      <h3>My Blog</h3>
                    </div>
                </div>
              </div>
            </div>

 <!------------------CONTENT--------------------->
            <div class="row">
              <div class="col-md-12 col-sm-6 ">
                <div class="x_panel fixed_height_320">                 	
                   
					@yield('content')
                 
                </div>
              </div>
            </div>  
 <!------------------ end CONTENT--------------------->		
          
		  </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; Blog 2024
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>	

    <!-- jQuery -->
    <script src='{{ asset("components/js/dist/jquery.min.js") }}'></script>
    <!-- Bootstrap -->
	<script src='{{ asset("components/bootstrap/dist/js/bootstrap.bundle.min.js") }}'></script>
	<script src='{{ asset("components/js/bootstrap-progressbar/bootstrap-progressbar.min.js") }}'></script>
    <!-- Custom Theme Scripts -->
    <script src='{{ asset("components/js/custom.min.js") }}'></script>
</body>
</html>	