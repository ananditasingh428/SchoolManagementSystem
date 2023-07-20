<?php include('../admin/header.php') ?>

<!-- Content Header (Page header) -->
<?php if($_GET['user']=='student'){?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 d-flex">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Student</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <a href="#">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text font-weight-bold text-lg"> Timetable</span>
                <span class="info-box-text text-sm">See timetable details</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="#">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold text-lg">Attendance</span>
              <span class="info-box-text text-sm">See your attendance</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>

      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="#">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold text-lg">Result</span>
              <span class="info-box-text text-sm">See your result</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- /.col -->
    
    <a href="../logout.php">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-power-off"></i></span>

          <div class="info-box-content">
            <span class="info-box-text font-weight-bold text-lg"> Logout</span>
            <!-- <span class="info-box-text text-sm">See students details</span> -->
          </div>
          <!-- /.info-box-content -->
        </div>
    </a>
    <!-- /.info-box -->
</div>
<!--/. container-fluid -->
</div>
</section>
<?php } else{?>
  <?php header('Location: ../login.php');?>
<?php }?>