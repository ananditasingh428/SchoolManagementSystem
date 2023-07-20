<?php include('header.php') ?>
<?php include('./includes/config.php') ?>


<script>
  function displayForm() {
    console.log("buttonclicked!!");
    document.getElementById("register-btn").style.display = "none";
    document.getElementById("form-div").style.display = "block";
  }

  function darkmodeChange() {
    let btn = document.getElementById("changeColor");
    let nav = document.querySelector("nav");
    let r = document.querySelector(":root");
    var rs = getComputedStyle(r);
    let mode = btn.innerText;

    if (mode === "Dark Mode") {
      nav.classList.add("bg-dark")
      nav.classList.remove("bg-primary");
      r.style.setProperty('--bgColor', '#000000');
      r.style.setProperty('--bgSecColor', '#212121');
      r.style.setProperty('--textColor', 'rgb(159, 155, 149)');
      btn.innerHTML = "Light Mode";
    } else {
      nav.classList.add("bg-primary")
      nav.classList.remove("bg-dark");
      r.style.setProperty('--bgColor', '#ffffff');
      r.style.setProperty('--bgSecColor', '#e0e0e0');
      r.style.setProperty('--textColor', '#000000');
      btn.innerHTML = "Dark Mode";
    }

  }
</script>
<style>
  :root {
    --bgColor: #ffffff;
    --bgSecColor: #e0e0e0;
    --textColor: #000000;

  }

  body {
    color: var(--textColor);
    background-color: var(--bgColor);
  }

  @media(min-width:200px) and (max-width:768px) {
    #form-div {
      display: none;
    }
  }

  @media(max-width:768px) {
    #testimonial-text {
      font-size: 3.5vw;
    }

    #testimonial-image {
      width: 70%;
      height: 70%;
    }
  }

  @media(max-width:991px) {
    #teachers_image {
      width: 110px;
    }

    #dropdown-menu {
      left: 7%;
    }
  }

  @media(max-width:1158px) {
    h3 {
      font-size: 22px;
    }
  }

  @media(max-width:1338px) {
    #sms-title {
      font-size: 6vw;
    }
  }

  @media(max-width:1039px) and (min-width:992px) {
    #submit-btn {
      font-size: 12px;
    }
  }
</style>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><b>SMS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses-section">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="changeColor" onclick="darkmodeChange()">Dark Mode </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown">
        <?php if (isset($_SESSION['login'])) { ?>
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333" id="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        <?php } else { ?>
          <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Login</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<div class="d-flex shadow" style="height:500px; background:linear-gradient(-35deg,#3923a7 50%,transparent 50%)">
  <div class="container-fluid my-auto">
    <div class="row">
      <div class="col-lg-6 col-md-2 my-auto d-none d-lg-block d-xl-block d-xxl-block">
        <h1 class="display-2  font-weight-bold" id="sms-title">Admission open for 2022-2023</h1>
        <p class="mx-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui incidunt quo
          impedit,voluptatum in volupta, labore pariatur earum?</p>
        <a href="" class="btn btn-lg btn-primary ml-2 mt-2">Call to action</a>
      </div>
      <div class="col-lg-6">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xxl-6  mx-auto card shadow-lg" id="form-div" style="background: var(--bgColor);">
          <div class="card-body">
            <h3>Admission Form</h3>
            <form action="" method="post">
              <!-- Material input -->
              <div class="md-form">
                <input type="text" id="form1" class="form-control" name="Name">
                <label for="name">Your Name</label>
              </div>
              <!-- Material input -->
              <div class="md-form">
                <input type="email" id="form1" class="form-control" name="Email">
                <label for="email">Your Email</label>
              </div>
              <!-- Material input -->
              <div class="md-form">
                <input type="text" id="form1" class="form-control" name="Mobile">
                <label for="mobile">Your Mobile</label>
              </div>
              <!-- Material input -->
              <div class="md-form">
                <input type="text" id="form1" class="form-control" name="Class">
                <label for="class">Your Class</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" onclick="submitForm()" id="submit-btn" name="submit-form">Submit Form</button>
            </form>
          </div>
        </div>
      </div>
      <button class="btn btn-secondary mx-auto d-md-none d-lg-none" id="register-btn" onclick="displayForm()"> Register Now</button>
    </div>
  </div>
</div>
<!-- sending addmission data -->
<script type="text/javascript">
  function submitForm() {
    var name = $('input[name=Name]').val();
    var mail = $('input[name=Email]').val();
    var phone = $('input[name=Mobile]').val();
    var cla = $('input[name=Class]').val();
    var formData = {
      name: name,
      mail: mail,
      email: email,
      cla: cla
    };
    $.ajax({
      //url:"/",
      type: "POST",
      data: formData,
      success: function(res) {
        console.log(res);
      }
    });
  }
</script>
<?php
if (isset($_POST['Name']) && $_POST['Name'] != '' && isset($_POST['Email']) && $_POST['Email'] != '' && isset($_POST['Mobile']) && $_POST['Mobile'] != '' && isset($_POST['Class']) && $_POST['Class'] != '') {
  $newstd_name = $_POST['Name'];
  $newstd_email = $_POST['Email'];
  $newstd_mobile = $_POST['Mobile'];
  $newstd_class = $_POST['Class'];
  $msg = "Congo!You are admitted!";
  mysqli_query($db_conn, "INSERT INTO AdmissionApply(`Name`,Email,Mobile,Class)VALUE('$newstd_name','$newstd_email','$newstd_mobile','$newstd_class')") or die('Connection error');
  //mail("$newstd_email","Admission Confirmed","$msg");
}
?>

<!--about section-->
<section class="py-5" id="about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="font-weight-bold">About <br> School Management System</h2>
        <div class="pr-5 pt-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sunt fugit nihil vitae doloremque ducimus ex nobis.
            Debitis alias hic vero, dicta esse deserunt similique perferendis officia accusantium earum molestias.Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Aliquid sunt fugit nihil vitae doloremque ducimus ex nobis.
            Debitis alias hic vero, dicta esse deserunt similique perferendis officia accusantium earum molestias.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sunt fugit nihil vitae doloremque ducimus ex nobis.
            Debitis alias hic vero, dicta esse deserunt similique perferendis officia accusantium earum molestias.</p>
        </div>
        <a href="about-us.php" class="btn btn-secondary">Know More</a>
      </div>
      <div class="col-lg-6" style="background:url('./assets/images/aboutus2.jpg');background-position: center;">
      </div>
    </div>
  </div>
</section>

<!--our courses-->
<section class="py-5" style="background: var(--bgSecColor);" id="courses-section">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Courses</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum est nobis temporibus voluptatem facilis praesentium possimus</p>
  </div>
  <div class="container">
    <div class="row">
      <?php
      for ($i = 0; $i < 8; $i++) { ?>
        <div class="col-lg-3 mb-5">
          <div class="card" style="background: var(--bgSecColor);">
            <div>
              <img src="./assets/images/school1.png" alt="course-pic" class="img-fluid">
            </div>
            <div class="card-body">
              <b>Web Developement and Designing</b>
              <p class="card-text">
                <b>Duration: </b>45 hours<br>
                <b>Price: </b>4000/- Rs
              </p>
              <button class="btn btn-block btn-primary">Enroll Now</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!--our teachers-->
<section class="py-5">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Teachers</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum est nobis temporibus voluptatem facilis praesentium possimus</p>
  </div>

  <div class="container">
    <div class="row">
      <?php
      $query = "SELECT * FROM Teacher";
      $query_run = mysqli_query($db_conn, $query);
      while ($teach_name = mysqli_fetch_object($query_run)) { ?>
        <div class="col-lg-3 my-5">
          <div class="card" style="background: var(--bgSecColor);">
            <div class="row">
              <div class="col-7 position-absolute ml-2" style="top:-50px">
                <img id="teachers_image" src="./assets/images/ef3-placeholder-image2.jpg" alt="" class="mw-100 rounded-circle">
              </div>
              <div class="card-body pt-5 mt-4 ml-2">

                <h5 class="card-title mb-0"><?= $teach_name->name ?></h5>
                <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                </p>
                <p class="card-text">
                  <b>Courses: </b>5<br>
                  <b>Ratings: </b>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!--achievements-->
<section class="py-5 text-white" style="background:#3923a7 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="font-weight-bold">Achievements</h2>
        <p class="pt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt hic eos voluptatum fuga?
          Laudantium ratione excepturi incidunt nobis non, iure omnis est modi facilis velit eos quaerat, exercitationem ipsam amet.</p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 rounded" src="./assets/images/achievements.jpg" alt="First slide" style="height:340px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 rounded " src="./assets/images/aboutus.jpg" alt="Second slide" style="height:340px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 rounded" src="./assets/images/achive3.png" alt="Third slide" style="height:340px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6 my-4">
              <div class="border rounded">
                <div class="card-body text-center">
                  <?php 
                    $query=mysqli_query($db_conn,"SELECT count(*) FROM Student");
                    $count_student=mysqli_fetch_column($query);
                  ?>
                  <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                  <h2 class="my-2 font-weight-bold h1"><?=$count_student?></h2>
                  <hr class="border-warning">
                  <h3>Students</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 my-4">
              <div class="border rounded">
                <div class="card-body text-center">
                <?php 
                    $query=mysqli_query($db_conn,"SELECT count(*) FROM Teacher");
                    $count_teacher=mysqli_fetch_column($query);
                  ?>
                  <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                  <h2 class="my-2 font-weight-bold h1"><?=$count_teacher?></h2>
                  <hr class="border-warning">
                  <h3>Teachers</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 my-4">
              <div class="border rounded">
                <div class="card-body text-center">
                <?php 
                    $query=mysqli_query($db_conn,"SELECT count(*) FROM Course");
                    $count_courses=mysqli_fetch_column($query);
                ?>
                  <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                  <h2 class="my-2 font-weight-bold h1"><?=$count_courses?></h2>
                  <hr class="border-warning">
                  <h3>Courses</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 my-4">
              <div class="border rounded">
                <div class="card-body text-center">
                  <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                  <h2 class="my-2 font-weight-bold h1">334</h2>
                  <hr class="border-warning">
                  <h3>Graduates</h3>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--testimonials-->
<section class="py-5">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">What People Says</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, eum atque et ipsam aspernatur amet, odio</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="border rounded positon-relative">
          <div class="p-3 text-center">
            <p id="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eos quod tempora, eveniet,
              non blanditiis dicta consequatur facere veritatis error,cupiditate nihil nulla inventore eaque
              totam odit quibusdam vel sed.</p>
          </div>
          <i class="fa fa-quote-left fa-3x position-absolute" style="top:1rem;left:1rem;opacity:.2"></i>
        </div>
        <div class="text-center mt-n4">
          <img src="./assets/images/ef3-placeholder-image2.jpg" class="rounded-circle border" width="100" height="100" alt="" id="testimonial-image">
          <h6 class="mb-0 font-weight-bold">Name of candidate</h6>
          <p><i>Designation</i></p>
        </div>
      </div>
      <div class="col-6">
        <div class="border rounded positon-relative">
          <div class="p-3 text-center">
            <p id="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eos quod tempora, eveniet,
              non blanditiis dicta consequatur facere veritatis error,cupiditate nihil nulla inventore eaque
              totam odit quibusdam vel sed.</p>
          </div>
          <i class="fa fa-quote-left fa-3x position-absolute" style="top:1rem;left:1rem;opacity:.2"></i>
        </div>
        <div class="text-center mt-n4">
          <img src="./assets/images/ef3-placeholder-image2.jpg" class="rounded-circle border" width="100" height="100" alt="" id="testimonial-image">
          <h6 class="mb-0 font-weight-bold">Name of candidate</h6>
          <p><i>Designation</i></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer-->
<footer style="overflow-x: hidden;">
  <div class="pt-5 text-white position-relative" style="background:#000000;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <h5>Useful Links</h5>

          <ul class="fa-ul ml-4">
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
          </ul>
        </div>
        <div class="col-lg-4 my-2">
          <h5>Social Presence</h5>
          <div>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook fa-stack-1x fa-inverse text-dark"></i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-3 py-2">
          <h5>Subscribe Now</h5>
          <form actio="">
            <div class="form-group">
              <input type="email" id="email-s" class="form-control " placeholder="Your Email">
              <label for="email-s"></label>
            </div>
            <button class="btn btn-secondary btn-block mt-n3">Submit</button>
          </form>
        </div>
      </div>
      <div class="row mt-3" style="bottom:0px;" id="copy-div">
        <div class="col-lg-12 ">
          <p class="text-white" style="opacity:.6; font-size:13px">Copyright 2020-2020 All Rights Reserved.School Management System developed by Mainak Das</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php include('footer.php') ?>