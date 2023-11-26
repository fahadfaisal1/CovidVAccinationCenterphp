<?php
include 'aside.php';
include 'connect.php';
// if (isset($_GET['id'])) {
//     $approved_id = $_GET['id'];

//     $sql_p = "UPDATE appointment set pstatus='approved' where pid='{$approved_id}'";
//     $res_p = mysqli_query($con, $sql_p);
// }
?>

<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box shadow" style="border-radius: 16px;">


                <h3 class="box-title">Appointment Request</h3>

                <div class="table-responsive">
                    <?php


                                    $sql_ap = "SELECT * from appointment";
                                    // $sql_ap = "SELECT * from appointmentdate  where date ='avail_date'";
                                    $res_ap = mysqli_query($con,$sql_ap);

                                    // echo mysqli_num_rows($res_ap);
                                    if(mysqli_num_rows($res_ap) > 0)
                                    {

                                    
                                ?>
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0"><h3 class="text-danger">Name</h3></th>
                                <th class="border-top-0"><h3 class="text-danger">Email</h3></th>
                                <th class="border-top-0"><h3 class="text-danger">Phone</h3></th>
                                <th class="border-top-0"><h3 class="text-danger">Date</h3></th>
                                <th class="border-top-0"><h3 class="text-danger">Vaccination</h3></th>
                                <!-- <th class="border-top-0"><h3 class="text-danger">DEPARTMENT</h3></th> -->
                                <!-- <th class="border-top-0"><h3 class="text-danger">DOCTOR</h3></th> -->
                                <th class="border-top-0"><h3 class="text-danger">CITY</h3></th>
                                <!-- <th class="border-top-0"><h3 class="text-danger">Status</h3></th> -->
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
                                <td><?php echo $row['uvaccination']?></td>
                                <!-- <td><?php 
                                // echo $row['pdepartment']
                                ?></td>
                                <td><?php
                                //  echo $row['pdoctor']
                                 ?></td> -->
                                <td><?php echo $row['pcity']?></td>
                                <!-- <td><a href="./appointment.php?id=<?php 
                                // echo $row['pid']
                                ?>" class='btn btn-success'>Approve Now</a></td> -->
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