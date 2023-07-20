<?php include('../includes/config.php') ?>
<?php include('dashboard.php') ?>
<!--  -->


<div class="container-fluid">
    <div class="row mx-0">
        <div class="col-12 mx-0 mb-2">
            <h3>Teachers Details</h3>
        </div>
        <div class="col-12">
            <div class="card bg-white  ">
                <div class="card-body">
                    <div class="card-text mb-2">Details provided below
                    <button class="btn btn-success btn-sm float-right" id="reloadData">Refresh</button>
                    </div>
                    <table id="db-tbl" class="table-responsive-sm table-bordered" style="width:100%">
                        <thead class="teacher-body">
                            <tr>
                                <th>Teacher Id</th>
                                <th>Teacher Name</th> 
                                <th>AssignedClass</th>
                                <th>AssignedSection</th>
                                <th>AssignedCourse</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Teacher Id</th>
                                <th>Teacher Name</th> 
                                <th>AssignedClass</th>
                                <th>AssignedSection</th>
                                <th>AssignedCourse</th>
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
    $(document).ready(function(){
            getdata();
    });
    function getdata(){
        $.ajax({
            type:"GET",
            url:"../includes/fetch_teacher.php",
            success:function(res){
                //console.log(response);
                $.each(res,function(key,value){
                    $('.teacher-body').append('<tr>'+
                                '<td>'+value['id']+'</td>\
                                <td>'+value['name']+'</td>\
                                <td>'+value['assignedClass']+'</td>\
                                <td>'+value['assignedSections']+'</td>\
                                <td>'+value['assignedSubjects']+'</td>');
                });
            }
        });
    }
    $("#reloadData").on("click", function() {
        console.log("clicked");
        console.log(location.href);
        getdata();
        console.log(getdata());
        $("#db-tbl").load("teachers.php?user=admin #db-tbl");
    });
</script>