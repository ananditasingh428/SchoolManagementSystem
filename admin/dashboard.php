<?php include('header.php') ?>
<?php include('../actions/login.php') ?>
<!-- Content Header (Page header) -->

<?php if($_GET['user']=='admin'){?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 d-flex">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
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
        <a href="./students.php?user=admin">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text font-weight-bold text-lg"> Students Section</span>
                <span class="info-box-text text-sm">See students details</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="./teachers.php?user=admin">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold text-lg">Teachers Section</span>
              <span class="info-box-text text-sm">See teachers details</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <a href="./courses.php?user=admin">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold text-lg">Courses Section</span>
              <span class="info-box-text text-sm">See course details</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="./add.php?user=admin">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold text-lg">ADD</span>
              <span class="info-box-text text-sm">Students,Faculties,Courses</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
      </a>
      <!-- /.col -->
    </div>



    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <a href="./admissions.php?user=admin">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold text-lg">New Admissions</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
      </a>
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
<!-- /.row -->
</div>
<!--/. container-fluid -->
</div>
</section>
<?php include('footer.php') ?>
<?php } else{?>
  <?php header('Location: ../login.php');?>
<?php }?>

