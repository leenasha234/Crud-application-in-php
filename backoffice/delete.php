<?php
require_once ('db.php');
if(isset($_GET['Del'])){
    $SNo = $_GET['Del'];
    $query = "delete from `student`  where `S.No` = '".$SNo."'";
    $result = mysqli_query($con, $query);


    if($result){
        header("location:view.php");

    }else{
         echo "Please check your query";
    }

}
else{
    echo" check your query";
}