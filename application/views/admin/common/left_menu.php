<script type="text/javascript">
	var base_url = "<?php echo $this->config->item('base_url_admin').'/'; ?>";
	var usr_id = <?php echo $session['usr_id']; ?>;
</script>

<header class="main-header">
	<!-- Logo -->
	<a href="<?php echo $this->config->item('base_url_admin')."/dashboard"; ?>" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  <span class="logo-mini">M</span>
	  <!-- logo for regular state and mobile devices -->
	  <span class="logo-lg">Myntra</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
	  <!-- Sidebar toggle button-->
	  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </a>

	  <div class="navbar-custom-menu">
	    <ul class="nav navbar-nav">
	      <!-- Messages: style can be found in dropdown.less-->
	      <!-- User Account: style can be found in dropdown.less -->
	      <li class="dropdown user user-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <img src="../image/user2-160x160.jpg" class="user-image" alt="User Image">
	          <span class="hidden-xs"><?php echo $session['usr_fname']; ?></span>
	        </a>
	        <ul class="dropdown-menu">
	          <!-- User image -->
	          <li class="user-header">
	            <img src="../image/user2-160x160.jpg" class="img-circle" alt="User Image">
	            <p><?php echo $session['usr_fname']; ?></p>
	          </li>
	          <!-- Menu Footer-->
	          <li class="user-footer">
	            <div class="pull-right">
	              <a href="<?php echo $this->config->item('base_url_admin')."/login/logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
	            </div>
	          </li>
	        </ul>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
	  <!-- Sidebar user panel -->
	  <!-- sidebar menu: : style can be found in sidebar.less -->
	  <ul class="sidebar-menu">
	    <li class="header">MAIN NAVIGATION</li>
	    <li><a href="<?php echo $this->config->item('base_url_admin')."/dashboard"; ?>"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
	    <li class="treeview">
	      <a href="#">
	        <i class="fa fa-files-o"></i>
	        <span>Users</span>
	      </a>
	      <ul class="treeview-menu">
	        <li><a href="<?php echo $this->config->item('base_url_admin')."/users"; ?>"><i class="fa fa-circle-o"></i> List</a></li>
	        <li><a href="<?php echo $this->config->item('base_url_admin')."/users/add"; ?>"><i class="fa fa-circle-o"></i> Add</a></li>
	      </ul>	      
	    </li>
	    <!--
		<li class="treeview">
	      <a href="#">
	        <i class="fa fa-files-o"></i>
	        <span>Destination</span>
	      </a>
	      <ul class="treeview-menu">
	        <li><a href="<?php echo $this->config->item('base_url_admin')."/destination"; ?>"><i class="fa fa-circle-o"></i> List</a></li>
	        <li><a href="<?php echo $this->config->item('base_url_admin')."/destination/add"; ?>"><i class="fa fa-circle-o"></i> Add</a></li>
	      </ul>	      
	    </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Denim</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Male<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/denim"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/denim/male_add"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>          	
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Female<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/denim/female_list"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/denim/female_add"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
             <i class="fa fa-files-o"></i> <span>Shirts</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Male<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/shirts"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/shirts/male_add"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>          	
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Female<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/shirts/female_list"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/shirts/female_add"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>
          </ul>
        </li> 
	   <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>T-Shirts</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Male<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/tshirts"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/tshirts/male_add"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>          	
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Female<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/tshirts/female_list"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/tshirts/female_add"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Signature Video</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Denim<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/signature"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/signature/add_denim_video"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>          	
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Shirts<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/signature/shirt_list"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/signature/add_shirt_video"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>T-shirts<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/signature/tshirt_list"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/signature/add_tshirt_video"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li> 
          </ul>
        </li> 
		-->	
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Looks</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Carousel<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/carousel"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php echo $this->config->item('base_url_admin')."/carousel/add_image"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>
              </ul>
            </li>          	
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Style<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->config->item('base_url_admin')."/style"; ?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>
            </ul>
        </li> 
		 
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Configure App</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/screensaver/catalogue"; ?>"><i class="fa fa-circle-o"></i>ScreenSaver</a>
            </li>          	
            <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/collectionvideo/catalogue"; ?>" ><i class="fa fa-circle-o"></i>Collection Video</a>
            </li>
            <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/genderSelection/catalogue"; ?>" ><i class="fa fa-circle-o"></i>Gender Selection</a>
            </li> 
			 <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/roadsterSelection/catalogue"; ?>" ><i class="fa fa-circle-o"></i>Roadster Selection</a>
            </li> 
			 <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/listvideo/catalogue"; ?>"><i class="fa fa-circle-o"></i>List Video</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/sortBy/catalogue"; ?>" ><i class="fa fa-circle-o"></i>Sort BY</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/filterBy/catalogue"; ?>" ><i class="fa fa-circle-o"></i>Filter By</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/productdesc/catalogue"; ?>""><i class="fa fa-circle-o"></i>Product Description</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/license/catalogue"; ?>" ><i class="fa fa-circle-o"></i>License</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/sendSMS/catalogue"; ?>" ><i class="fa fa-circle-o"></i>Send SMS</a>
            </li> 
          </ul>
        </li> 
	  </ul>
	</section>
	<!-- /.sidebar -->
</aside>
