<?php
if($_SERVER['REQUEST_METHOD'] =="POST"){
    require_once('inc/header.php');
    $department = $_POST['department'];
    $session = $_POST['session'];
    $semester = $_POST['semester'];
    $date = date('Y-m-d') ;
    
    $select2 = "SELECT * FROM students WHERE department='$department' AND session='$session' AND semester='$semester'";
    $query2 = mysqli_query($db,$select2);
    $assoc2 = mysqli_fetch_assoc($query2);
    $student_id2 = $assoc2['id'];

    $select = "SELECT * FROM attandance WHERE date= '$date' AND student_id='$student_id2' ";
    $query = mysqli_query($db,$select);

    $rows = mysqli_num_rows($query);
    if($rows >0){
        header('location: taken-already.php');
    }
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
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-8 m-auto">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Students Name</th>
                                                        <th class="text-center">Department</th>
                                                        <th class="text-center">Roll</th>
                                                        <th class="text-center">Session</th>
                                                        <th class="text-center">Semester</th>
                                                        <th class="text-center">Attandance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($query2 as $key => $value) { ?>
                                                        <tr>
                                                            <td><?php echo $key +1 ?></td>
                                                            <td><?php echo $value['student_name']?></td>
                                                            <td><?php echo ucfirst($value['department'])?></td>
                                                            <td><?php echo $value['roll']?></td>
                                                            <td><?php echo $value['session']?></td>
                                                            <td><?php echo $value['semester']?></td>
                                                            <td>
                                                                <input type="hidden" name="student_id[]" value="<?php echo $value['id']?>">
                                                                <select name="status[]" id="" class="form-control">
                                                                    <option value="false">Absent</option>
                                                                    <option value="true">Present</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- col-4 -->
                                </div><!-- row -->
                                <div class="form-layout-footer text-center">
                                    <button type="submit" class="btn btn-info mg-r-5"><i class="fa fa-plus-circle"></i> Submit</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                        </div><!-- card -->
                    </form>
                </div>
            </div><!-- row -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php 

require_once('inc/footer.php');

}else {
    echo 'sorry';
}
?>