<?php include("header.php") ?>
    <section class="bg-light vh-100 d-flex">
        <div class="col-9 col-sm-6 col-lg-4 col-xl-4 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px">
                    <i class="fa fa-user text-light fa-3x m-auto"></i>
                </div>
                    <form action="actions/login.php" method="POST" id="myForm">
                        <div class="md-form">
                            <input type="email" id="email" class="form-control" name="email">
                            <label for="email">Your Email</label>
                        </div>
                        <div class="md-form">
                            <input type="password" id="password" class="form-control" name="password">
                            <label for="password">Your Password</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-secondary" name="login">Login</button>
                        </div>
                        <div class="text-center mt-4">
                            <a href='./forgotPass.php'>Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include("footer.php") ?>