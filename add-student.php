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
                    <form action="student-post.php" method="POST">
                        <div class="card pd-20 pd-sm-40">
                            <h6 class="card-body-title">Add New Student</h6>
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Student Name: <span class="tx-danger">*</span></label>
                                            <input required class="form-control" type="text" name="name" placeholder="Enter Name">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Department: <span class="tx-danger">*</span></label>
                                            <select required class="form-control select2" data-placeholder="Choose Department" name="department">
                                                <option label="Choose Department"></option>
                                                <option value="computer">Computer</option>
                                                <option value="civil">Civil</option>
                                                <option value="electronics">Electronics</option>
                                                <option value="electrical">Electrical</option>
                                                <option value="mechanical">Mechanical</option>
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Roll: <span class="tx-danger">*</span></label>
                                            <input required class="form-control" type="number" name="roll" placeholder="Enter Roll">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Session: <span class="tx-danger">*</span></label>
                                            <select required class="form-control select2" data-placeholder="Choose Session" name="session">
                                                <option label="Choose Session"></option>
                                                <option value="10-11">10-11</option>
                                                <option value="11-12">11-12</option>
                                                <option value="12-13">12-13</option>
                                                <option value="13-14">13-14</option>
                                                <option value="14-15">14-15</option>
                                                <option value="15-16">15-16</option>
                                                <option value="16-17">16-17</option>
                                                <option value="17-18">17-18</option>
                                                <option value="18-19">18-19</option>
                                                <option value="19-20">19-20</option>
                                                <option value="20-21">20-21</option>
                                                <option value="21-22">21-22</option>
                                                <option value="22-23">22-23</option>
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Semester:<span class="tx-danger">*</span></label>
                                            <select required class="form-control select2" data-placeholder="Choose Semester" name="semester">
                                                <option label="Choose Semester"></option>
                                                <option value="1st">1st</option>
                                                <option value="2nd">2nd</option>
                                                <option value="3rd">3rd</option>
                                                <option value="4th">4th</option>
                                                <option value="5th">5th</option>
                                                <option value="6th">6th</option>
                                                <option value="7th">7th</option>
                                                <option value="8th">8th</option>
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Contact Number: <span class="tx-danger">*</span></label>
                                            <input required class="form-control" type="text" name="contactNumber" placeholder="Enter Contact Number">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
                                            <input required class="form-control" type="email" name="email" placeholder="Enter Email Address">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Guardian Name: <span class="tx-danger">*</span></label>
                                            <input required class="form-control" type="text" name="guardianName" placeholder="Enter Guardian Name">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Contact Number(Guardian): <span class="tx-danger">*</span></label>
                                            <input required class="form-control" type="text" name="contactNumberGurdian" placeholder="Enter Contact Number (Guardian)">
                                        </div>
                                    </div><!-- col-4 -->
                                </div><!-- row -->
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-info mg-r-5"><i class="fa fa-plus-circle"></i> Add New Student</button>
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
