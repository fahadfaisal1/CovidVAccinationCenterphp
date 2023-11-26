<?Php

   
    include 'Admin/connect.php';
    error_reporting(0);
    session_start();
    $msg = "";

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql  = "SELECT * FROM users where uemail = '$email' and upassword = '$pass' and ustatus != 'pending'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) == 0)
        {
            $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> Wrong Email or Password
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        else
        {
            $row = mysqli_fetch_array($result);
            $_SESSION['users_login'] = $email;

            header("location: index.php");
         
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
<!-- end modal -->

<!--start form-->

    <div class="container-fluid my-5">

        <h3 class="text-center mt-5">Login Now</h3>
        <div class="row">
            <div class="col-6 mx-auto ">

            <form class="shadow mt-5 p-5" method="post">

                <div class="form-group">
                        <?php echo $msg;?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" placeholder="Enter Email" name='email' class="form-control" >
                    
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" class="form-control" >
                </div>

                <div class="mb-3">
                    <input type="submit" value="login" name="login"  class="btn btn-primary">


                     <a href="./register.php" class="btn btn-dark ms-auto">Register Now</a>
               
                    
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