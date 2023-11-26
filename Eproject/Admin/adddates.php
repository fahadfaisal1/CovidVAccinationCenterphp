
<?php
            include 'connect.php';
            $errors = array( 'cat_name'=>'','msg'=>'');


            $msg = "";
            if(isset($_GET['id']))
            {
                $id1 = $_GET['id'];
                $res = mysqli_query($con,"DELETE from appointmentdate where id = '$id1'");
                $msg = "<h4 class='text-danger'>Date deleted Successfully</h4>";
                header("Refresh: 2 , url=adddates.php");
        
            }
            
        
            if(isset($_POST['add']))
            {
                if(empty($_POST['name']))
                {
                    $errors['cat_name'] = '<span class="text-danger">Field is Required </span>';
                }
                else
                {
            
                    $title= $_POST['name'];
                    $sql_e = "SELECT * FROM appointmentdate WHERE avail_date='$title'";
                    $res_e = mysqli_query($con, $sql_e);
                    if (mysqli_num_rows($res_e) > 0)
                    {
                    $errors['cat_name'] = '<span class="text-danger">This Date  already exist </span>';
                    }
                }

                if(array_filter($errors))
                {
                    $errors['msg']= "<div class='alert alert-danger' role='alert'>
                        something went wrong
                    </div>";
                }
                else
                {
                    $cname = $_POST['name'];

                    $sql1 = "INSERT INTO `appointmentdate`(`avail_date`) VALUES ('{$cname}')";
                    $res1 = mysqli_query($con,$sql1);
                    $errors['msg']= "<div class='alert alert-success' role='alert'>
                        New Date Added
                    </div>";
                    header("Refresh: 2 , url=adddates.php");
                }
                
                
            
            }
            include 'aside.php';
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
                        <!-- <h4 class="page-title">Catagories</h4> -->
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
                <div class="row">
                    <div class="col-sm-12">

                        <div class="white-box">
                            <h3 class="box-title text-center">Add Available Date</h3>   
                            <form action="" class="shadow p-3" method="post">
                            <?php echo $errors['msg']?>
                                <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Available Date">
                                </div>
                                <div class="form-group">
                                    <?php echo $errors['cat_name']?>
                                </div>

                                <div class="form-group mt-4">
                                    <input type="submit" name="add" value=' Add Available Date' class="btn btn-success">
                                </div>
                            </form>
                            
                        </div>

                        <div class="white-box">
                            <?php echo $msg?>
                            <h3 class="box-title">Available Dates</h3>
                           
                            <div class="table-responsive">
                                <?php

                                    
                                    $sql_d = "SELECT * from appointmentdate";
                                    $result_d = mysqli_query($con,$sql_d);

                                    if(mysqli_num_rows($result_d) > 0 )
                                    {

                                    
                                ?>
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Dates</th>
                                            <th class="border-top-0">Action</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            while($row = mysqli_fetch_array($result_d))
                                            {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['avail_date']?></td>
                                            <td>
                                                <a href="./adddates.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <?php 
                                }
                                else
                                {
                                  
                                    echo "<h1> No Dates Found </h1>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
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