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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
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
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <?php

                                $Sql_user = "SELECT count(uid) as no_of_user from users where ustatus='approved'";
                                $sql_res = mysqli_query($con,$Sql_user);
                                $user = mysqli_fetch_array($sql_res);
                                
                            
                            ?>
                            <h3 class="box-title">Approved User</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $user['no_of_user']?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <?php

                                $Sql_user = "SELECT count(pid) as no_of_appointments from appointment where pstatus='approved'";
                                $sql_res = mysqli_query($con,$Sql_user);
                                $appointment = mysqli_fetch_array($sql_res);
                                
                            
                            ?>
                            <h3 class="box-title">Appointments</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $appointment['no_of_appointments']?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <?php

                                $Sql_admin = "SELECT count(id) as no_of_admin from admin";
                                $sql_admin = mysqli_query($con,$Sql_admin);
                                $admin = mysqli_fetch_array($sql_admin);
                                
                            
                            ?>
                            <h3 class="box-title">Approved Admins</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $admin['no_of_admin']?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <?php

                                $Sql_user = "SELECT count(hid) as no_of_hospital from hospitals where hstatus='approved'";
                                $sql_res = mysqli_query($con,$Sql_user);
                                $user = mysqli_fetch_array($sql_res);
                                
                            
                            ?>
                            <h3 class="box-title">Approved Hospitals</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $user['no_of_hospital']?></span></li>
                            </ul>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">


                            <h3 class="box-title">Patient Account to be Approved</h3>
                            
                            <div class="table-responsive">
                            <?php

                            $sql = "SELECT * from users where ustatus='pending' ";
                            $res = mysqli_query($con,$sql);

                            if(mysqli_num_rows($res)> 0)
                            {


                            ?>
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">email</th>
                                            <th class="border-top-0">password</th>
                                            <th class="border-top-0">cnic</th>
                                            <th class="border-top-0">city</th>
                                            <th class="border-top-0">address</th>
                                            <th class="border-top-0">status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['uname']?></td>
                                                <td><?php echo $row['uemail']?></td>
                                                <td><?php echo $row['upassword']?></td>
                                                <td><?php echo $row['ucnic']?></td>
                                                <td><?php echo $row['ucity']?></td>
                                                <td><?php echo $row['uaddress']?></td>
                                                <td><a href="./index.php?id=<?php echo $row['uid']?>" class='btn btn-success'>Approve Now</a></td>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">


                            <h3 class="box-title">Hospital Admin Account to be Approved</h3>
                            
                            <div class="table-responsive">
                            <?php

                            $sql_h = "SELECT * from hospitals where hstatus='pending' ";
                            $res_h = mysqli_query($con,$sql_h);

                            if(mysqli_num_rows($res_h)> 0)
                            {


                            ?>
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">email</th>
                                            <th class="border-top-0">password</th>
                                            <th class="border-top-0">city</th>
                                            <th class="border-top-0">status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($res_h))
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['hname']?></td>
                                                <td><?php echo $row['hemail']?></td>
                                                <td><?php echo $row['hpass']?></td>
                                                <td><?php echo $row['hlocation']?></td>
                                                <td><a href="./index.php?id=<?php echo $row['hid']?>" class='btn btn-success'>Approve Now</a></td>
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