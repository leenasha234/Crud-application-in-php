<?php
require_once ('db.php');
$query =" select * from student";
$result = mysqli_query($con, $query);
?>
<?php require 'header.php' ?>
<div class="container">
    <h3 class="box mt-3">Dashboard</h3>
    <h4><a class="anchor" href="home.php">Home</a> | <a class="anchor" href="insert.php">Insert a new record</a> </h4>
    <div class="row">
        <div class="col-md-6-m-auto">
            <h4 class="box mt-3">View Records</h4>
            <div class="card mt-5">
                <table class="table table-bordered">
                    <tr>
                        <td>Student.No</td>
                        <td>Name</td>
                        <td>Age</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    <?php
                        while($row=mysqli_fetch_assoc($result)){
                            $SNo =$row['S.No'];
                            $Name =$row['name'];
                            $Age =$row['age'];

                    ?>
                    <tr>
                        <td><?php echo $SNo?></td>
                        <td><?php echo $Name?></td>
                        <td><?php echo $Age?></td>
                        <td><a href="edit.php?GetID=<?php echo$SNo?>">Edit</a></td>
                        <td><a href="delete.php?Del=<?php echo $SNo?>">Delete</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
        </div>
    </div>

</div>
<?php require 'footer.php'?>


