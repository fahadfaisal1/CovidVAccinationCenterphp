<?Php
   
    include 'connect.php';
 
    $msg= '';
    if(isset($_POST['registered']))
    {
        if($_POST['email']=='')
        {
            $msg = '<span class="text-danger">Please Provide Valid Email </span>';
        }
        else
        {
            $email= $_POST['email'];
            $sql_a = "SELECT * FROM admin WHERE email='$email'";
            $res_a = mysqli_query($con, $sql_a);
            if (mysqli_num_rows($res_a) > 0)
            {
                $msg = '<span class="text-danger">Please use different email </span>';
            }
        }
        
        if($msg == '')
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $phone = $_POST['number'];

            $file_name = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];


            move_uploaded_file($temp_name, "uploads/admin_profile/".$file_name);


            $sql = "INSERT INTO `admin`(`username`, `email`, `pass`, `number`,`profile`) VALUES
             ('$name','$email','$pass','$phone','$file_name') ";

            $res = mysqli_query($con,$sql);

            if($res)
            {
                header('location: index.php');
            }
            else
            {
                echo "<script> alert('error ocured')</script>";
            }
        }

    }

    include 'aside.php';
    ?>
<?php
?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box shadow" style="border-radius: 16px;">


                    <h3 class="box-title">Add Admin</h3>
                    <form class="mt-5" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" required class="form-control">
                            <?php echo $msg?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="number" required class="form-control">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Profile</label>
                            <input type="file" name="image" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="registered" class="btn btn-primary">Add Admin</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>


    </div>
</div>



<!-- footer -->
<?php
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