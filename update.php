<?php
require_once ("db.php");
if (isset($_POST['update'])){
    $StudNo =$_GET['GetID'];
    $Name =$_POST['name'];
    $Age =$_POST['age'];
    $query = "update student set name ='".$Name."', age = '".$Age."' where StudNo= '".$SNo."'";
    $result =mysqli_query($con,$query);
    if($result){
        header("location:view.php");
    } else{
        echo 'please check your query';
    }

}else{
    header("location:view.php");
}


