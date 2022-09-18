<?php
require_once('inc/header.php');

$select = "SELECT * FROM students ORDER BY id DESC";
$students = mysqli_query($db,$select);

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
                    <form action="student-post.php" method="POST">
                        <div class="card pd-20 pd-sm-40">
                            <h6 class="card-body-title">All Student</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Students Name</th>
                                            <th>Department</th>
                                            <th>Roll</th>
                                            <th>Session</th>
                                            <th>Semester</th>
                                            <th>Contact Number</th>
                                            <th>E-mail</th>
                                            <th>Guardian Name</th>
                                            <th>Contact Number(Guardian )</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <?php 
                                        foreach ($students as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $key + 1 ?></td>
                                                <td><?php echo $value['student_name'] ?></td>
                                                <td><?php echo ucfirst($value['department']) ?></td>
                                                <td><?php echo $value['roll'] ?></td>
                                                <td><?php echo $value['session'] ?></td>
                                                <td><?php echo $value['semester'] ?></td>
                                                <td><?php echo $value['contact_number'] ?></td>
                                                <td><?php echo $value['email'] ?></td>
                                                <td><?php echo $value['guardian_name'] ?></td>
                                                <td><?php echo $value['gurdian_number'] ?></td>
                                                <td> 
                                                    <a href="" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>    
                                                    <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i>  Delete</a>    
                                                </td>
                                            </tr>
                                        <?php } ?>
                                   </tbody>
                                </table>
                            </div>
                        </div><!-- card -->
                    </form>
                </div>
            </div><!-- row -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/jquery-ui/jquery-ui.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="lib/d3/d3.js"></script>
    <script src="lib/rickshaw/rickshaw.min.js"></script>
    <script src="lib/chart.js/Chart.js"></script>
    <script src="lib/Flot/jquery.flot.js"></script>
    <script src="lib/Flot/jquery.flot.pie.js"></script>
    <script src="lib/Flot/jquery.flot.resize.js"></script>
    <script src="lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="js/starlight.js"></script>
    <script src="js/ResizeSensor.js"></script>
    <script src="js/dashboard.js"></script>
  </body>
</html>
