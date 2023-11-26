<?Php

    include '../Admin/connect.php';
    $msg= '';
    if(isset($_POST['register']))
    {
        if($_POST['email']=='')
        {

        }
        else
        {
            $email= $_POST['email'];
            $sql_e = "SELECT * FROM hospitals WHERE hemail='$email'";
            $res_e = mysqli_query($con, $sql_e);
            if (mysqli_num_rows($res_e) > 0)
            {
                $msg = '<span class="text-danger">Please use different email </span>';
            }
        }
        
        if($msg == '')
        {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $location = $_POST['location'];
            $status = "pending";
            // $file_name = $_FILES['image']['name'];
            // $temp_name = $_FILES['image']['tmp_name'];


            move_uploaded_file($temp_name, "uploads/admin_profile/".$file_name);

            $sql = "INSERT INTO `hospitals`(`hname`, `hemail`, `hpass`,  `hlocation`, `hstatus`) VALUES ('{$name}','{$email}','{$pass}','{$location}','{$status}') ";

            $res = mysqli_query($con,$sql);
            
            header('location: login.php');
        }

    }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Hospital name</label>
                                    <input class="au-input au-input--full" type="text" name="username"
                                        placeholder="Enter hospital name">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>location</label>
                                    <input class="au-input au-input--full" type="location" name="location"
                                        placeholder="enter your located location">
                                </div>
                                <!-- <div class="mb-3">
                                    <label class="form-label">Profile</label>
                                    <input type="file" name="image" required class="form-control">
                                </div> -->
                                <button type="submit" name="register" class="btn btn-primary">Register Now</button>

                                <a href="./login.php" class="btn btn-info">Login Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->