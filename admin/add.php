<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php include("../includes/config.php") ?>
<?php include("./dashboard.php") ?>


<style>
    .cursor {
        cursor: pointer;
    }
    </style>

<div class = "container-fluid">
        <div class="row">
        <div class="col-12 d-flex mb-4">
            <h3>Add Members/Courses</h3>
        </div>
            </div>
            <div class="row">
        <!-- students -->
        <div class="col-12 col-sm-6 col-md-3">
            <a data-toggle="modal" class = "cursor"
                            data-target="#studentModal">
                <div class="info-box mb-3" id="student-box" name="std-1">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text font-weight-bold text-lg">Add Students</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>

        <!-- teachers -->
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <a data-toggle="modal" class = "cursor"
                            data-target="#teacherModal">
                <div class="info-box mb-3" id="teacher-box">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text font-weight-bold text-lg">Add Teachers</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
        <!-- courses -->
        <div class="col-12 col-sm-6 col-md-3">
            <a data-toggle="modal" class = "cursor"
                            data-target="#courseModal">
                <div class="info-box mb-3" id="course-box">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text font-weight-bold text-lg">Add Courses</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<!--course Modal -->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 
aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <h3 class="mb-3 font-weight-bold">Add Courses</h3>
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal"
         aria-label="Close" onClick = "finalSubmit()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action = "" method = "POST" enctype="multipart/form-data" > 
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="course_id">Course id</label>
                                <input type="text" id="course_id" class="form-control bg-white " name="course_id">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="course_name">Course Name</label>
                                <input type="text" id="course_name" class="form-control bg-white " name="course_Name">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="course_duration">Course duration</label>
                                <input type="number" id="course_duration" class="form-control bg-white " name="course_Duration">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="course_price">Course price</label>
                                <input type="text" id="course_price" class="form-control bg-white " name="course_Price">
                            </div>

                                <!-- Material input -->
                            <!-- <div class="md-form my-3" >
                                <label for="">Course Image</label>
                                <input type="file" name="image" class="form-control-lg mb-6 ml-n1">
                            </div> -->

                            <div class="modal-footer">
            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
            <button type = "submit" class="btn btn-primary"
            name="course_submit">Save changes</button>
            
        </div>
                           
        </form>
      </div>
      
    </div>
  </div>
</div>

<?php 
     if(isset($_POST['course_submit'])){
          
        $id=$_POST['course_id'];
        $course_name=$_POST['course_Name'];
        $course_duration=$_POST['course_Duration'];
        $course_price=$_POST['course_Price'];
        //$course_img=$_FILES['image']['name'];
        
        //print_r($course_img);
        // mysqli_query($db_conn,"INSERT INTO Course(id,`name`,duration,price,course_img) VALUE ('$id','$course_name','$course_duration','$course_price','$course_img')");
        // move_uploaded_file($_FILES['course_Image']['name'],"../img_upload".$_FILES['course_Image']['name']);
   
    }

?>

<!-- Student_modal -->
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <form action="" method="post">
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="regno">Student RegNo.</label>
                                <input type="text" id="regno" class="form-control bg-white " name="Std_regno">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Std_name">Student Name</label>
                                <input type="text" id="Std_name" class="form-control bg-white " name="Std_Name">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Std_class">Student Class</label>
                                <input type="text" id="Std_class" class="form-control bg-white " name="Std_Class">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Std_sec">Student Sec</label>
                                <input type="text" id="Std_sec" class="form-control bg-white " name="Std_Sec">
                            </div>

                            <div class="md-form">
                                <label for="Std_course">Student Course</label>
                                <input type="text" id="Std_course" class="form-control bg-white " name="Std_Course">
                            </div>
                             <div class="md-form">
                                 <label for="Std_email">Email</label>
                                <input type="email" id="Std_email" class="form-control bg-white " name="Std_email">
                            </div>

                            <div class="md-form">
                                <label for="Std_email">Default Password</label>
                                <input type="text" id="Std_password" class="form-control bg-white " name="Std_password">
                            </div>
 
                        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name = "Std_submit">Save changes</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>

<?php 
if(isset($_POST['Std_submit'])){
          
    $regno=$_POST['Std_regno'];
    $std_name=$_POST['Std_Name'];
    $class=$_POST['Std_Class'];
    $sec=$_POST['Std_Sec'];
    $course=$_POST['Std_Course'];
    $email = $_POST['Std_email'];
    $password = $_POST['Std_password'];
    $designation = 'student';
    // insert into LoginDetails(email, password, designation) value ('123@abc.com', '12345', 'student');

    mysqli_query($db_conn, "INSERT INTO LoginDetails(email, password, designation) VALUE ('$email', '$password', '$designation')");
    mysqli_query($db_conn,"INSERT INTO Student(regNo,std_name,class,sec,course) VALUE ('$regno','$std_name','$class','$sec','$course')");
} 

?>

<!-- Teacher Modal -->
<div class="modal fade" id="teacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Teachers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <form action="" method="post">
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Teach_id">Teacher id</label>
                                <input type="text" id="Teach_id" class="form-control bg-white " name="teach_id">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Teach_name">Teacher Name</label>
                                <input type="text" id="Teach_name" class="form-control bg-white " name="teach_Name">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Teach_class">Teacher's Assigned Class</label>
                                <input type="text" id="Teach_class" class="form-control bg-white " name="teach_Class">
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <label for="Teach_Sec">Teacher's Assigned Sec</label>
                                <input type="text" id="Teach_Sec" class="form-control bg-white " name="teach_Sec">
                            </div>
                            <div class="md-form">
                                <label for="Teach_Course">Teacher's Assigned Course</label>
                                <input type="text" id="Teach_Course" class="form-control bg-white " name="teach_Course">
                            </div>
                            <div class="md-form">
                                 <label for="Std_email">Email</label>
                                <input type="email" id="teach_email" class="form-control bg-white " name="teach_email">
                            </div>

                            <div class="md-form">
                                <label for="Std_email">Default Password</label>
                                <input type="text" id="teach_password" class="form-control bg-white " name="teach_password">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name = "teach_submit">Save changes</button>
                            </div>
     </form>
      </div>
      
    </div> 
    <!-- end model content -->
  </div>
</div>

<?php if(isset($_POST['teach_submit'])){
          
          $id=$_POST['teach_id'];
          $teach_name=$_POST['teach_Name'];
          $teach_class=$_POST['teach_Class'];
          $teach_sec=$_POST['teach_Sec'];
          $teach_course=$_POST['teach_Course'];
          $email = $_POST['teach_email'];
          $password = $_POST['teach_password'];
          $designation = 'teacher';

          mysqli_query($db_conn, "INSERT INTO LoginDetails(email, password, designation) VALUE ('$email', '$password', '$designation')");
          mysqli_query($db_conn,"INSERT INTO Teacher(id,`name`,assignedClass,assignedSections,assignedSubjects) VALUE ('$id','$teach_name','$teach_class','$teach_sec','$teach_course')");
      } ?>



