<?php
require_once("db.php");
if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['age'])){
        echo "please fill the tables properly";
    }else {
            $name=$_POST['name'];
            $age = $_POST['age'];

            $query = "insert into student (name, age) values('$name', '$age')";
            $result = mysqli_query($con,$query);
            if($result)
            {
            header("location:view.php");
            }
        else{
            echo "please check your query";
            }

    }

}else{
    header("location:index.php");
}