<?php
include 'Admin/connect.php';
include 'header.php';

session_start();


?>


<div class="container mt-5">
      

<div class="col-lg-8 col-xlg-9 col-md-12">
    <h1 class="text-center">My Profile</h1>
                <div class="card mt-3">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group mb-4">
                          
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" 
                                        class="form-control p-0 border-0" name="example-email" id="example-email"
                                         name="email" value='<?php echo $_SESSION['user_login']?>'>
                                </div>

                                <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Full name</label>
                                <div class="col-md-12 border-bottom p-0" >
                                    <input type="email" 
                                        class="form-control p-0 border-0" name="example-email" id="example-email"
                                         name="email">
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
                                    <input type="text"
                                        class="form-control p-0 border-0"
                                        name="number">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Booked Appointment</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                        value='<?php echo $curent_admin_data['number']?>' class="form-control p-0 border-0"
                                        name="number">
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-primary">
                                    MY REPORT OF COVID VACCINATION
                                </a>
                            </div>

                            </div>
            

</div>