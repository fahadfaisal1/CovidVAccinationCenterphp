<?php
            include 'aside.php';

            include 'connect.php';

        
            error_reporting(0);

            if(isset($_POST['update_img']))
            {

                $img_name = $_FILES['img']['name'];
                $img_temp_name = $_FILES['img']['tmp_name'];
                move_uploaded_file($img_temp_name,"uploads/admin_profile//".$img_name);

                $res = mysqli_query($con,"UPDATE admin set profile ='$img_name'  where email = '$email'");
                header('location: profile.php');
            
            
            }
                                
                 
            // echo "<pre class='text-center'>";
            // print_r($row_data);
            // echo "</pre>";
            ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <!-- <li><a href="#" class="fw-normal">Dashboard</a></li> -->
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img
                                        src="uploads/admin_profile/<?php echo $curent_admin_data['profile']?>"
                                        class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white mt-2"><?php echo $curent_admin_data['username']?></h4>
                                <h5 class="text-white mt-2"><?php echo $curent_admin_data['email']?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box mt-5 d-md-flex">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="file" name="img" class="form-control">

                            <input type="submit" name="update_img" class="btn btn-info mt-2">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Full Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Johnathan Doe"
                                        value='<?php echo $curent_admin_data['username']?>' class="form-control p-0 border-0"
                                        name="name">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="johnathan@admin.com" disabled
                                        class="form-control p-0 border-0" name="example-email" id="example-email"
                                        value='<?php echo $curent_admin_data['email']?>' name="email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Password</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" value='<?php echo $curent_admin_data['pass']?>'
                                        class="form-control p-0 border-0" name="password">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Phone No</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="123 456 7890"
                                        value='<?php echo $curent_admin_data['number']?>' class="form-control p-0 border-0"
                                        name="number">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <a href="./update.php?id=<?php echo $curent_admin_data['id']?>" class="btn btn-danger">
                                    Update Profile</a>
                                        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Column -->
    
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php
            include 'footer.php';
            ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
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