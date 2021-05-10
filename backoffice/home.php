<?php
require_once ('db.php');
$query =" select * from student";
$result = mysqli_query($con, $query);
?>
<?php require 'header.php' ?>
<div class="container">
    <h3 class="box mt-3">Home</h3>
    <h4><a class="anchor" href="view.php">Dashboard</a> </h4>
    <div class="row">
        <div class="col-md-6-m-auto">
            <h4 class="box mt-3">View Records</h4>
            <div class="card mt-5">
                <table class="table table-bordered">
                    <tr>
                        <td>Student.No</td>
                        <td>Name</td>
                        <td>Age</td>
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
                    </tr>
                    <?php
                        }
                    ?>
                </table>
        </div>
    </div>

</div>
<?php require 'footer.php'?>



