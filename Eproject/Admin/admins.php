<?php
     include 'aside.php';
?>
<?php

            
include 'connect.php';

if (isset($_GET['id'])) {
    $approved_id = $_GET['id'];

    $sql1 = "UPDATE users set ustatus='approved' where uid='{$approved_id}'";
    $res1 = mysqli_query($con, $sql1);
}
if (isset($_GET['id'])) {
    $approved_hospital_id = $_GET['id'];

    $sql_ho = "UPDATE hospitals set hstatus='approved' where hid='{$approved_hospital_id}'";
    $res3 = mysqli_query($con, $sql_ho);
}
// if (isset($_GET['id'])) {
//     $approve_id = $_GET['id'];

//     $sql_ad = "UPDATE admin set status='approved' where id='{$approve_id}'";
//     $res_ad = mysqli_query($con, $sql_ad);
// }

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
                        <!-- <h4 class="page-title">Dashboard</h4> -->
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
            

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">


                            <h3 class="box-title">Admin Accounts</h3>
                            
                            <div class="table-responsive">
                            <?php

                            $sql_a = "SELECT * from admin ";
                            $res_a = mysqli_query($con,$sql_a);

                            if(mysqli_num_rows($res_a)> 0)
                            {


                            ?>
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">email</th>
                                            <th class="border-top-0">password</th>
                                            <th class="border-top-0">number</th>
                                            <th class="border-top-0">Profile</th>

                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($res_a))
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['username']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['pass']?></td>
                                                <td><?php echo $row['number']?></td>
                                                <td>
                                                    <img src='uploads/admin_profile/<?php echo $row['profile']?>' class="img-fluid" width="100px" height="20px"alt="<?php echo $row['username']?>">
                                                </td>

                                            </tr>

                                            <?php
                                            }
                                            ?>


                                    </tbody>
                                </table>

                                <?php
                                }
                                else
                                {
                                    echo "<h5> No New Account Request </h5>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include 'footer.php'
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
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>