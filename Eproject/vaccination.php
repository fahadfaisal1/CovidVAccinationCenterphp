<?php

include 'header.php';

?>

<style>
input {
    
       height: 40px;
       display: flex !important;
       justify-content: center !important;
       align-items: center !important;
       width: 700px !important;
       border: none !important;
       border: 1px solid lightblue !important;
       background: none !important;
       border-radius: 50px !important;

   }
</style>


<!-- container start -->
<div class="container">


    <!-- search bar -->
    <div class="row mt-5 mx-auto">
        <div class="col-8">
            <input type="text" placeholder="Search for hospital" id="keysearch" name="">
        </div>
    </div>


    <!-- search end -->



    <!-- card 2 -->
    <div class="row mt-5">



        <?php

        include 'admin/connect.php';
        $hosptils_query = mysqli_query($con,"SELECT * from addhospital");
        while($hosptils_data = mysqli_fetch_array($hosptils_query ))

        {
    ?>



        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="./Admin/uploads/admin_profile/hospital_profile/<?php echo $hosptils_data['profile']?>" alt=" height200px" width="200px">
                </div>
                <br>
                <br>
                <div class="col-12 col-md-8">
                        <h1><?php echo $hosptils_data['dname']?></h1>
                        
                        <br>
                        <br>
                         
                        <h4 ><?php echo $hosptils_data['hlocation']?></h4>
                         
                         <a href="appointment.php?id=<?php echo $row['id']?>" class="btn btn-primary mt-3">
                         Request For Covid Test</a>
                    
                </div>  
            </div>
            <hr>
        </div>
        <?php } ?>


    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
$("#keysearch").on("keyup",function(){
alert("hi");
});
});

</script>