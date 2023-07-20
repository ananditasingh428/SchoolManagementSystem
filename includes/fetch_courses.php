<?php include("./config.php")?>

<?php
    $query="SELECT * FROM Course";
    $query_run= mysqli_query($db_conn,$query);
    $result_array=[];

    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row)
        {
            array_push($result_array,$row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else{
        echo $return = "<h4>No record found</h4>";
    }

?>
