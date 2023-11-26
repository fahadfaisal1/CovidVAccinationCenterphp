<?Php

    include 'Admin/connect.php';
    $msg= '';
    if(isset($_POST['register']))
    {
        if($_POST['email']=='')
        {

        }
        else
        {
            $email= $_POST['email'];
            $sql_e = "SELECT * FROM users WHERE uemail='$email'";
            $res_e = mysqli_query($con, $sql_e);
            if (mysqli_num_rows($res_e) > 0)
            {
                $msg = '<span class="text-danger">Please use different email </span>';
            }
        }
        
        if($msg == '')
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $phone = $_POST['phone'];
            $cnic = $_POST['cnic'];
            $city = $_POST['city'];
            $adrress = $_POST['address'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $status = "pending";

            $sql = "INSERT INTO `users`(`uname`, `uemail`, `upassword`, `uphone`, `ucnic`, `ucity`, `uaddress`, `ustatus`) VALUES ('{$name}','{$email}','{$pass}','{$phone}','{$cnic}','{$city}','{$adrress}','{$status}') ";

            $res = mysqli_query($con,$sql);
            
            header('location: login.php');
        }

    }
    include 'header.php';

    ?>

<!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

<!--end modal-->

<!--start form-->

    <div class="container-fluid my-5">

        <h3 class="text-center mt-5">Register Now</h3>
        <div class="row">
            <div class="col-6 mx-auto shadow mt-3" style="border-radius: 16px;">

            <form class=" mt-5 p-4" method="post" >
                <div class="mb-3">
                    <label  class="form-label">Full Name</label>
                    <input type="text" name="name" required class="form-control" >
                 </div>
                 <!-- <div class="mb-3">
                    <label  class="form-label">Gender</label>
                    <input type="text" name="name" required class="form-control">
                 </div> -->
                 <!-- <div class="mb-3 mt-5">
                    
                 <label for="start">Date Of Birth</label>
                 <br>
                    <input type="date" id="start" name="trip-start" name="dob">
                 </div> -->
                
                 <!-- <div class="mb-3 mt-4">
                 <label>Please select your Gender</label>
                 <br>

                  <input type="radio" id="contactChoice1" name="contact" value="email" />
                  <label for="contactChoice1">Male</label>
<br>
                  <input type="radio" id="contactChoice2" name="contact" value="phone" />
                        <label for="contactChoice2">Female</label>
                        <br>
                 
                 </div> -->


                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" name="email" required class="form-control" >
                    <?php echo $msg?>
                 </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" name="password" required class="form-control" >
                </div>

                <div class="mb-3">
                    <label  class="form-label">Phone</label>
                    <input type="text" name="phone" required  class="form-control" >
                 </div>

                 <div class="mb-3">
                    <label  class="form-label">Cnic</label>
                    <input type="text" name="cnic" required class="form-control" >
                 </div>

                 <div class="mb-3">
                    <label  class="form-label">city</label>
                    <input type="text" name="city" required  class="form-control" >
                 </div>

                 
                 <div class="mb-3">
                    <label  class="form-label">address</label>
                    <textarea name="address" required class="form-control" id="" cols="30" rows="3"></textarea>
                 </div>


                <div class="mb-3">
                    <button type="submit"  name="register" class="btn btn-primary">Register Now</button>

                    <a href="./login.php" class="btn btn-info">Login Now</a>
                </div>
               
                
                </form>
            </div>
        </div>
    </div>
<!--End form-->


<!-- Start Footer -->
    <?Php
    include 'footer.php';

    ?>
<!-- End Footer -->

<!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
<!-- End Script -->
</body>

</html>