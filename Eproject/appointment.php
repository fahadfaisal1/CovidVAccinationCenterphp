<?Php

    include 'Admin/connect.php';
    $msg= '';
    if(isset($_POST['appointment']))

    {
        if($_POST['email']=='')
        {

        }
        else
        {
            $email= $_POST['email'];
            $sql_e = "SELECT * FROM appointment WHERE pemail='$email'";
            $res_e = mysqli_query($con, $sql_e);
            if (mysqli_num_rows($res_e) > 0)
            {
                $msg = '<span class="text-danger"> Please use different email </span>';
            }
        }
        
        if($msg == '')
        {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];
            $vaccination = $_POST['vaccination'];
            $city = $_POST['city'];
            $status = "pending";

            

    $sql = "INSERT INTO `appointment`(`pname`, `pemail`, `pphone`, `pdate`, `uvaccination`, `pcity`, `pstatus`) VALUES ('$name','$email','$phone','$date','$vaccination','$city','$status')";



            $res = mysqli_query($con,$sql);
            
            header('location: welcome.php');


        }

    }
    

    include 'header.php';

    ?>
<!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg mt-5">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form  method="post"  class="mt-5">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" required name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" >
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" required class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <?php echo $msg?>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" required class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" >
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4 form-group mt-3">

            <select name="date" class="form-control">
                <option value="select">Available Appointment Date</option>

                <?php
                                                        
                $sql = "SELECT * from appointmentdate";
                $res = mysqli_query($con,$sql);
                                                        
                while($row = mysqli_fetch_array($res))
                {
                ?>
                
                <option value="<?php 

                echo $row['avail_date']?>"><?php echo $row['avail_date']?></option>
                                                    
                <?php 
              } 
              ?>

            </select>

              <!-- <input type="datetime" required name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" > -->
            
            </div>
            
            <!-- <div class="col-md-4 form-group mt-3"> -->
            <!-- <select name="doctor" class="form-control">
                <option value="select">Select Hospital</option>

                <?php
                                                        
                // $sql = "SELECT * from addhospital";
                // $res = mysqli_query($con,$sql);
                                                        
                // while($row = mysqli_fetch_array($res))
                // {
                ?>
                
                <option value="<?php
                 echo $row['dname']?>"><?php
                  echo $row['dname']?></option>
                                                    
                <?php
              //  } 
               ?>

            </select> -->
            <!-- </div> -->
            

            <div class="col-md-4 form-group mt-3">
            <select name="category" class="form-control">
                <option value="select">Select Vaccination </option>

                <?php
                                                        
                $sql = "SELECT * from category";
                $res = mysqli_query($con,$sql);
                                                        
                while($row = mysqli_fetch_array($res))
                {
                ?>
                
                <option value="<?php echo $row['cname']?>"><?php echo $row['cname']?></option>
                                                    
                <?php } ?>

            </select>
            </div>
          </div>
          <div class="mt-5 text-center">
              <button type="submit"  name="appointment" class="btn btn-primary">Make Appointment</button>
          </div>
        </form>

      </div>
    </section>
<!-- End Appointment Section -->
<?php
include 'footer.php'
?>