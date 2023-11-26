<?php
include 'aside.php';
include 'connect.php';
?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box shadow" style="border-radius: 16px;">
                <?php
                $uid = $_GET['id'];

                $sql_q = "SELECT * from admin where id=$uid";
                $res_q = mysqli_query($con,$sql_q);

                while($row = mysqli_fetch_array($res_q))
                {

                ?>
                    <form class="form-horizontal form-material">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Full Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="Johnathan Doe"
                                    value='<?php echo $row['username']?>' class="form-control p-0 border-0"
                                    name="name">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="email" placeholder="johnathan@admin.com" class="form-control p-0 border-0"
                                    name="example-email" id="example-email" value='<?php echo $row['email']?>'
                                    name="email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" value='<?php echo $row['pass']?>'
                                    class="form-control p-0 border-0" name="password">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone No</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="123 456 7890" value='<?php echo $row['number']?>'
                                    class="form-control p-0 border-0" name="number">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input type="submit" name="update" value="Update Profile" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                    <?php
                }
                ?>
                </div>
            </div>
        </div>


    </div>
</div>



<!-- footer -->
<?php

if(isset($_POST['update']))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $phone = $_POST["number"];

    $sql1 = "UPDATE admin set `username`= '{$name}' , `email`= '{$email}' , `pass`= '{$name}'  , `number`= '{$phone}' Where id = $uid";

    $res1 = mysqli_query($con,$sql1);

    header("location : profile.php");
}

include 'footer.php';

?>
<!-- End footer -->
</div>>
<!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.js"></script>
</body>

</html>