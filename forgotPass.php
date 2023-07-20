<?php include("header.php") ?>

<section class="bg-light vh-100 d-flex">
    <div class="col-9 col-sm-6 col-lg-4 col-xl-4 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px">
                    <i class="fa fa-user text-light fa-3x m-auto"></i>
                </div>
                <form action="actions/forgotPass.php" method="POST">
                    <div class="md-form">
                        <input type="email" id="email" class="form-control" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="new_password" class="form-control" name="new_pass">
                        <label for="new_password">New Password</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="confirm_password" class="form-control" name="confirm_pass">
                        <label for="confirm_password">Confirm Password</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-secondary" name="save_pass" onclick="display()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- <script>
    function display() {
        alert("Dabane pe Ghanta kuch nhi honewala!");
    }
</script> -->
<?php include("footer.php") ?>