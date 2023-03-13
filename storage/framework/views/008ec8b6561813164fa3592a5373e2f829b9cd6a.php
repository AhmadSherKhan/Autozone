
<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<section class="banner-main rent-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col serviceshero">
                <div class="text-bg">
                    <p class="h1">Rent a Car Services in Lahore</p>
                    <p class="h3">Professional Car At Affordable Prices in Lahore</p>
                </div>
                <div class="images">
                    <img src="../images/jeep.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container">
<div class="heading">Rent A Car</div>
    <div class="sub-heading instructions ml-10">Terms and Conditions</div>
        <div class="sub-instructions">● Customers are responsible for paying for their own fuel consumption. Each car is provided with a level of fuel and customers have to return the vehicle with the same level of fuel as they were given. The difference in fuel will be charged to the customer plus PKR.500 Service Charges if the same amount is not returned.<br>
        ● In the case of (intercity rides) Chauffeur’s food & accommodation is the responsibility of the customer if not, then pay PKR 1500 allowance per day.<br>
        ● You have the right to complain against the driver, service, vehicle, etc. but you cannot reprimand the chauffeur on your own or force the driver to go against company policies in any circumstances.<br>
        ● Toll Taxes, Parking Fees, etc. are to be paid by the renting part.<br>
        ● In case of intercity Drop-off, client will be charged for return fuel too.
        </div>
        <div><span class="badge">NOTE:</span>  Please enter correct details for your booking. These details are necessary to verify your identity</div>
</div>
   
<?php echo $__env->make('categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid rentform">

    <form action="" id="request_form"  method="POST">
        <?php echo csrf_field(); ?>
        <div id="closerentform" class="fas fa-times"></div>
        <div class="sub-heading ">Customer Details</div>
        <input type="hidden" name="id">
    <div class="col-12">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label for="owner_name" class="control-label">Customer Fullname</label>
                    <input type="text" name="name" id="owner_name" placeholder="Enter your name" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="owner_name" class="control-label">Customer CNIC</label>
                    <input type="text" name="CNIC" id="owner_name" placeholder="Enter your CNIC" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="contact" class="control-label">Owner Contact #</label>
                    <input type="text" name="Contact" id="contact" placeholder="Enter your contact" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Owner Email</label>
                    <input type="email" name="Email" id="email" placeholder="Enter your email" class="form-control form-control-sm rounded-0" required>
                </div>                
                <div class="form-group">
                    <label for="address" class="control-label">Pick up Address</label>
                    <textarea rows="3" name="Address" id="address" class="form-control form-control-sm rounded-0" placeholder="Enter your address" style="resize:none" required></textarea>
                </div>
            </div>

            <div class="col-md-6">
                
            </div>    
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



  <?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>

    let buttons = document.querySelectorAll('.rent-btn');
        let rentForm=document.querySelector('.rentform');
        for (let i=0; i< buttons.length; i++ ){
            buttons[i].addEventListener("click", function(){
                rentForm.classList.toggle('active');
            })
        }
document.getElementById('closerentform').onclick = () =>{
	rentForm.classList.remove('active');
};
</script>


<?php /**PATH E:\Autozone1\resources\views/rentacar.blade.php ENDPATH**/ ?>