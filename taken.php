<?php
    require_once('inc/header.php');
      
?>
    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
              <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.php">Student Attandance</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row">
                <div class="col-md-12">
                    <form action="student-attandance-post.php" method="POST">
                        <input type="hidden" name="department" value="<?php echo $department?>">
                        <input type="hidden" name="session" value="<?php echo $session?>">
                        <input type="hidden" name="semester" value="<?php echo $semester?>">
                        <div class="card pd-20 pd-sm-40 text-center">
                            <h5 class="card-body-title">Take Attandance for <?php echo date('d/M/Y')?></h5>
                            <h3>Attandance Taken</h3>
                            
                        </div><!-- card -->
                    </form>
                </div>
            </div><!-- row -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 

require_once('inc/footer.php');
?>