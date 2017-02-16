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
	      <li class="dropdown messages-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <i class="fa fa-envelope-o"></i>
	          <span class="label label-success">4</span>
	        </a>
	        <ul class="dropdown-menu">
	          <li class="header">You have 4 messages</li>
	          <li>
	            <!-- inner menu: contains the actual data -->
	            <ul class="menu">
	              <li><!-- start message -->
	                <a href="#">
	                  <div class="pull-left">
	                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
	                  </div>
	                  <h4>
	                    Support Team
	                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
	                  </h4>
	                  <p>Why not buy a new awesome theme?</p>
	                </a>
	              </li>
	              <!-- end message -->
	              <li>
	                <a href="#">
	                  <div class="pull-left">
	                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
	                  </div>
	                  <h4>
	                    AdminLTE Design Team
	                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
	                  </h4>
	                  <p>Why not buy a new awesome theme?</p>
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <div class="pull-left">
	                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
	                  </div>
	                  <h4>
	                    Developers
	                    <small><i class="fa fa-clock-o"></i> Today</small>
	                  </h4>
	                  <p>Why not buy a new awesome theme?</p>
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <div class="pull-left">
	                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
	                  </div>
	                  <h4>
	                    Sales Department
	                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
	                  </h4>
	                  <p>Why not buy a new awesome theme?</p>
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <div class="pull-left">
	                    <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
	                  </div>
	                  <h4>
	                    Reviewers
	                    <small><i class="fa fa-clock-o"></i> 2 days</small>
	                  </h4>
	                  <p>Why not buy a new awesome theme?</p>
	                </a>
	              </li>
	            </ul>
	          </li>
	          <li class="footer"><a href="#">See All Messages</a></li>
	        </ul>
	      </li>
	      <!-- Notifications: style can be found in dropdown.less -->
	      <li class="dropdown notifications-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <i class="fa fa-bell-o"></i>
	          <span class="label label-warning">10</span>
	        </a>
	        <ul class="dropdown-menu">
	          <li class="header">You have 10 notifications</li>
	          <li>
	            <!-- inner menu: contains the actual data -->
	            <ul class="menu">
	              <li>
	                <a href="#">
	                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
	                  page and may cause design problems
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <i class="fa fa-users text-red"></i> 5 new members joined
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <i class="fa fa-shopping-cart text-green"></i> 25 sales made
	                </a>
	              </li>
	              <li>
	                <a href="#">
	                  <i class="fa fa-user text-red"></i> You changed your username
	                </a>
	              </li>
	            </ul>
	          </li>
	          <li class="footer"><a href="#">View all</a></li>
	        </ul>
	      </li>
	      <!-- Tasks: style can be found in dropdown.less -->
	      <li class="dropdown tasks-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <i class="fa fa-flag-o"></i>
	          <span class="label label-danger">9</span>
	        </a>
	        <ul class="dropdown-menu">
	          <li class="header">You have 9 tasks</li>
	          <li>
	            <!-- inner menu: contains the actual data -->
	            <ul class="menu">
	              <li><!-- Task item -->
	                <a href="#">
	                  <h3>
	                    Design some buttons
	                    <small class="pull-right">20%</small>
	                  </h3>
	                  <div class="progress progress-xs">
	                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	                      <span class="sr-only">20% Complete</span>
	                    </div>
	                  </div>
	                </a>
	              </li>
	              <!-- end task item -->
	              <li><!-- Task item -->
	                <a href="#">
	                  <h3>
	                    Create a nice theme
	                    <small class="pull-right">40%</small>
	                  </h3>
	                  <div class="progress progress-xs">
	                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	                      <span class="sr-only">40% Complete</span>
	                    </div>
	                  </div>
	                </a>
	              </li>
	              <!-- end task item -->
	              <li><!-- Task item -->
	                <a href="#">
	                  <h3>
	                    Some task I need to do
	                    <small class="pull-right">60%</small>
	                  </h3>
	                  <div class="progress progress-xs">
	                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	                      <span class="sr-only">60% Complete</span>
	                    </div>
	                  </div>
	                </a>
	              </li>
	              <!-- end task item -->
	              <li><!-- Task item -->
	                <a href="#">
	                  <h3>
	                    Make beautiful transitions
	                    <small class="pull-right">80%</small>
	                  </h3>
	                  <div class="progress progress-xs">
	                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	                      <span class="sr-only">80% Complete</span>
	                    </div>
	                  </div>
	                </a>
	              </li>
	              <!-- end task item -->
	            </ul>
	          </li>
	          <li class="footer">
	            <a href="#">View all tasks</a>
	          </li>
	        </ul>
	      </li>
	      <!-- User Account: style can be found in dropdown.less -->
	      <li class="dropdown user user-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
	          <span class="hidden-xs"><?php echo $session['usr_fname']; ?></span>
	        </a>
	        <ul class="dropdown-menu">
	          <!-- User image -->
	          <li class="user-header">
	            <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                <!--<li><a href="<?php echo $this->config->item('base_url_admin')."/signature/add_shirt_video"; ?>"><i class="fa fa-circle-o"></i>Add</a></li>-->
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
              <a href="<?php echo $this->config->item('base_url_admin')."/screensaver/catalouge"; ?>"><i class="fa fa-circle-o"></i>ScreenSaver</a>
            </li>          	
            <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/collectionvideo/catalouge"; ?>" ><i class="fa fa-circle-o"></i>Collection Video</a>
            </li>
            <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/genderSelection/catalouge"; ?>" ><i class="fa fa-circle-o"></i>Gender Selection</a>
            </li> 
			 <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/roadsterSelection/catalouge"; ?>" ><i class="fa fa-circle-o"></i>Roadster Selection</a>
            </li> 
			 <li>
              <a href="<?php echo $this->config->item('base_url_admin')."/listvideo/catalouge"; ?>"><i class="fa fa-circle-o"></i>List Video</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/sortBy/catalouge"; ?>" ><i class="fa fa-circle-o"></i>Sort BY</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/filterBy/catalouge"; ?>" ><i class="fa fa-circle-o"></i>Filter By</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/productdesc/catalouge"; ?>""><i class="fa fa-circle-o"></i>Product Description</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/license/catalouge"; ?>" ><i class="fa fa-circle-o"></i>License</a>
            </li> 
			<li>
              <a href="<?php echo $this->config->item('base_url_admin')."/sendSMS/catalouge"; ?>" ><i class="fa fa-circle-o"></i>Send SMS</a>
            </li> 
          </ul>
        </li> 
	  </ul>
	</section>
	<!-- /.sidebar -->
</aside>
