<?php include('../includes/config.php') ?>
<?php include('dashboard.php') ?>
<!--  -->

<div class="row mx-0">
    <div class="col-12 mx-0 mb-2">
        <h3>Student Details</h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body bg-white">
                <div class="card-text mb-2">Details provided below
                    <button class="btn btn-success btn-sm float-right" id="reloadData">Refresh</button>
                </div>
                <table id="db-tbl" class="table-responsive-sm table-bordered" style="width:100%">
                    <thead class="student-body">
                        <tr>
                            <th>Reg No.</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Course</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Reg No.</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Course</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
        getdata();
    });

    function getdata() {
        $.ajax({
            type: "GET",
            url: "../includes/fetch_student.php",
            success: function(res) {
                console.log(res);
                $.each(res, function(key, value) {
                    $('.student-body').append('<tr>' +
                        '<td>' + value['regNo'] + '</td>\
                                <td>' + value['std_name'] + '</td>\
                                <td>' + value['class'] + '</td>\
                                <td>' + value['sec'] + '</td>\
                                <td>' + value['course'] + '</td>');
                });
            }
        });
    }
    $("#reloadData").on("click", function() {
        console.log("clicked");
        console.log(location.href);
        getdata();
        console.log(getdata());
        $("#db-tbl").load("students.php?user=admin #db-tbl");
    });
</script>