<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- FORM SECTION STARTS -->


<section class="banner-main services-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col serviceshero">
                <div class="text-bg">
                    <p class="h1">Car Services in Lahore</p>
                    <p class="h3">Professional Car Services At Affordable Prices in Lahore</p>
                </div>
                <div class="images">
                    <img src="../images/mechanic.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="heading">Send Services Request</div>
        <div class="sub-heading instructions ml-10">Terms and Conditions
        </div>
            <div class="sub-instructions">● Every effort will be made to provide the services by the estimated time, but the Company shall not be liable for 
        any delay in completing the services<br>
        ● Payment for all services and repairs is due on completion of work.<br>
        ● Any work carried out by the mechanics at the request of the customer, will be at the customer’s risk from the point of completion of work.<br>
        ● The mechanic may refuse to carry out all, or part of any work for any reason whether or not an estimate has been provided.<br>
        ●  The price of the service provided shall be the price agreed between the Company and the Buyer, at the time the Buyer agrees to work being carried ou
            </div>
        <div><span class="badge">NOTE:</span>  Please enter correct details for your booking. These details are necessary to verify your identity</div>
</div>
   
<?php echo $__env->make('servicelist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid servform">

    <form action="" id="request_form" method="POST">
        <?php echo csrf_field(); ?>
    <div id="closeservform" class="fas fa-times"></div>
    <div class="sub-heading ">Customer Details</div>
        <input type="hidden" name="id">
    <div class="col-12" style="overflow-y:scroll;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="owner_name" class="control-label">Owner Fullname</label>
                    <input type="text" name="sname" id="owner_name" placeholder="Enter your name" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="contact" class="control-label">Owner Contact #</label>
                    <input type="text" name="scontact" id="contact" placeholder="Enter your contact" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Owner Email</label>
                    <input type="email" name="semail" id="email" placeholder="Enter your email" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <textarea rows="3" name="saddress" id="address" class="form-control form-control-sm rounded-0" placeholder="Enter your address" style="resize:none" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="vehicle_name" class="control-label">Vehicle Name</label>
                    <input type="text" name="svehiclename" id="vehicle_name" class="form-control form-control-sm rounded-0" placeholder="Enter vehicle name" required>
                </div>
                <div class="form-group">
                    <label for="vehicle_registration_number" class="control-label">Vehicle Registration Number</label>
                    <input type="text" name="sregnum" id="vehicle_registration_number" class="form-control form-control-sm rounded-0" placeholder="Enter reg number" required>
                </div>
                <div class="form-group">
                    <label for="vehicle_model" class="control-label">Vehicle Model</label>
                    <input type="text" name="smodel" id="vehicle_model" class="form-control form-control-sm rounded-0" placeholder="Enter your car model" required>
                </div>
                <div class="form-group">
                    <label for="service_id" class="control-label">Services</label>
                    <select name="ServiceType[]" id="service_id" class="js-example-basic-multiple form-control mb-3" multiple="multiple"  required>
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'autozone_db');

                    $query = "SELECT * FROM service_lists";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $row)
                        {
                            ?>
                                <option value="<?=$row['servicename'];?>"> <?=$row['servicename'];?>  </option>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <option value="">No Record Found</option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service_type" class="control-label">Request Type</label>
                    <select name="servtype" id="service_type" class="form-select form-select-sm select2 rounded-0"  required>
                        <option>Drop Off</option>
                        <option>Pick Up</option>
                    </select>
                </div>
                <!-- <div class="form-group" style="display:none">
                    <label for="pickup_address" class="control-label">Pick up Address</label>
                    <input rows="3" name="saddress" id="pickup_address" class="form-control form-control-sm rounded-0" style="resize:none" required></input>
                </div> -->
                <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-danger text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-danger ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                <?php endif; ?>
                <?php endif; ?>
                
            </div>
        </div>
    </div>  
    </form>
</div>






<!-- FORM SECTION ENDS -->



<?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Autozone1\resources\views/serviceform.blade.php ENDPATH**/ ?>