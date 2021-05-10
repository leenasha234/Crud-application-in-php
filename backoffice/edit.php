    <?php
    require_once ("db.php");
    $SNo =$_GET['GetID'];
    $query = " SELECT * FROM student WHERE `S.No`='".$SNo."'";
    $result = mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    $Name = $row['name'];
    $Age = $row['age'];
    ?>
<?php require 'header.php' ?>
<div class="container">
    <div class="row">
        <h3>Edit records</h3>
        <h4><a class="anchor" href="home.php">Home</a> | <a class="anchor" href="view.php">Dashboard</a>
        <div class="col-lg-6-m-auto">
            <div class="card mt-5">
                <div class="card-title">
                </div>
                <div class="card-body">
                    <form action="update.php?GetID=<?php echo $SNo?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder="Name of student" name="name" value="<?php echo $Name?>">

                        <input type="text" class="form-control mb-2" placeholder="Age of student" name="age" value="<?php echo $Age?>">

                        <button type="submit" class="btn btn-info" name="update">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php require 'footer.php'?>

