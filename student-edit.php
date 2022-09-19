<?php
require_once('inc/header.php');
    $id = $_GET['id'];
    $select = "SELECT * FROM students WHERE id=$id";
    $query = mysqli_query($db,$select);
    $student = mysqli_fetch_assoc($query);
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
                    <form action="student-edit-post.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
                        <div class="card pd-20 pd-sm-40">
                            <h6 class="card-body-title">Edit Student</h6>
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Student Name: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $student['student_name'] ?>" placeholder="Enter Name">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Department: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Department" name="department">
                                                <option label="Choose Department"></option>
                                                <option value="computer" <?php if($student['department']=='computer') echo 'selected' ?> >Computer</option>
                                                <option value="civil" <?php if($student['department']=='civil') echo 'selected' ?> >Civil</option>
                                                <option value="electronics" <?php if($student['department']=='electronics') echo 'selected' ?> >Electronics</option>
                                                <option value="electrical" <?php if($student['department']=='electrical') echo 'selected' ?> >Electrical</option>
                                                <option value="mechanical" <?php if($student['department']=='mechanical') echo 'selected' ?> >Mechanical</option>
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Roll: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="roll" value="<?php echo $student['roll']?>" placeholder="Enter Roll">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Session: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Session" name="session">
                                                <option label="Choose Session"></option>
                                                <option value="10-11" <?php if($student['session']=='10-11') echo 'selected' ?>>10-11</option>
                                                <option value="11-12" <?php if($student['session']=='11-12') echo 'selected' ?>>11-12</option>
                                                <option value="12-13" <?php if($student['session']=='12-13') echo 'selected' ?>>12-13</option>
                                                <option value="13-14" <?php if($student['session']=='13-14') echo 'selected' ?>>13-14</option>
                                                <option value="14-15" <?php if($student['session']=='14-15') echo 'selected' ?>>14-15</option>
                                                <option value="15-16" <?php if($student['session']=='15-16') echo 'selected' ?>>15-16</option>
                                                <option value="16-17" <?php if($student['session']=='16-17') echo 'selected' ?>>16-17</option>
                                                <option value="17-18" <?php if($student['session']=='17-18') echo 'selected' ?>>17-18</option>
                                                <option value="18-19" <?php if($student['session']=='18-19') echo 'selected' ?>>18-19</option>
                                                <option value="19-20" <?php if($student['session']=='19-20') echo 'selected' ?>>19-20</option>
                                                <option value="20-21" <?php if($student['session']=='20-21') echo 'selected' ?>>20-21</option>
                                                <option value="21-22" <?php if($student['session']=='21-22') echo 'selected' ?>>21-22</option>
                                                <option value="22-23" <?php if($student['session']=='22-23') echo 'selected' ?>>22-23</option>
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Semester:<span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Semester" name="semester">
                                                <option label="Choose Semester"></option>
                                                <option value="1st" <?php if($student['semester']=='1st') echo 'selected' ?>>1st</option>
                                                <option value="2nd" <?php if($student['semester']=='2nd') echo 'selected' ?>>2nd</option>
                                                <option value="3rd" <?php if($student['semester']=='3rd') echo 'selected' ?>>3rd</option>
                                                <option value="4th" <?php if($student['semester']=='4th') echo 'selected' ?>>4th</option>
                                                <option value="5th" <?php if($student['semester']=='5th') echo 'selected' ?>>5th</option>
                                                <option value="6th" <?php if($student['semester']=='6th') echo 'selected' ?>>6th</option>
                                                <option value="7th" <?php if($student['semester']=='7th') echo 'selected' ?>>7th</option>
                                                <option value="8th" <?php if($student['semester']=='8th') echo 'selected' ?>>8th</option>
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Contact Number: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="contactNumber" value="<?php echo $student['contact_number'] ?>" placeholder="Enter Contact Number">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="email" name="email" value="<?php echo $student['email'] ?>" placeholder="Enter Email Address">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Guardian Name: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="guardianName" value="<?php echo $student['guardian_name'] ?>" placeholder="Enter Guardian Name">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Contact Number(Guardian): <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="contactNumberGurdian" value="<?php echo $student['guardian_number'] ?>" placeholder="Enter Contact Number (Guardian)">
                                        </div>
                                    </div><!-- col-4 -->
                                </div><!-- row -->
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-info mg-r-5"><i class="fa fa-save"></i> Update Student</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                        </div><!-- card -->
                    </form>
                </div>
            </div><!-- row -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php require_once('inc/footer.php') ?>
