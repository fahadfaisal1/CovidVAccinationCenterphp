<?php
include 'aside.php'; 
include '../Admin/connect.php';
?>
<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <!-- <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div> -->
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
                                        <li class="ms-auto">
                                            <h3 class="counter text-success">
                                                <?php echo $appointment['no_of_appointments']?></h3>
                                        </li>
                                    </ul>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <h2>388,688</h2>
                                        <span>items solid</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2>1,086</h2>
                                        <span>this week</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                    <div class="text">
                                        <h2>$1,060,386</h2>
                                        <span>total earnings</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Appointments</h2>
                        <div class="table-responsive table--no-card m-b-40">
                        <?php

                        $sql_ap = "SELECT * from appointment";
                        $res_ap = mysqli_query($con,$sql_ap);

                        // echo mysqli_num_rows($res_ap);
                        if(mysqli_num_rows($res_ap) > 0)
                        {


                        ?>
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="text-right">Date</th>
                                        <th class="text-right">vaccination</th>
                                        <!-- <th class="text-right">Doctor</th> -->
                                        <th class="text-right">City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                while($row = mysqli_fetch_array($res_ap))
                                {
                                ?>
                                    <tr>
                                        <td><?php echo $row['pname']?></td>
                                        <td><?php echo $row['pemail']?></td>
                                        <td><?php echo $row['pphone']?></td>
                                        <td><?php echo $row['pdate']?></td>
                                        <!-- <td><?php echo $row['pdepartment']?></td>
                                        <td><?php echo $row['pdoctor']?></td>
                                        <td><?php echo $row['pcity']?></td> -->
                                    </tr>

                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                include 'footer.php'
                ?>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
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