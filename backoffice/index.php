<?php require 'header.php' ?>
<div class="container">
    <div class="row">
        <h3>Insert New records</h3>
        <h4><a class="anchor" href="home.php">Home</a> | <a class="anchor" href="view.php">Dashboard</a>
        <div class="col-lg-6-m-auto">
            <div class="card mt-5">
                <div class="card-title">
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post">
                        <input type="text" class="form-control mb-2" placeholder="Name of student" name="name"><br>

                        <input type="text" class="form-control mb-2" placeholder="Age of student" name="age">

                        <button class="btn btn-info" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php require 'footer.php'?>

