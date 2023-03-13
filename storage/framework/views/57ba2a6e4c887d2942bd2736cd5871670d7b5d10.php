
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container">
  <div class="row">
    <div class="col-sm">
   
      <div class="carbox">
        <div class="images">
          <img src="/carimage/<?php echo e($cars->image); ?>" alt="">
        </div>
        <div class="content1">
          <div class="carname"><?php echo e($cars->carname); ?></div>
          <p>
            <span class="text-success">Theft Protection</span> | 
            <span class="text-success">Clean interior/Exterior</span> | <br>
            <span class="text-success">Cancellation Policies</span> | 
            <span class="text-success">Terms & Conditions</span> | 
          </p>
        </div>
        <div class="price">
          <h3>Rs: <?php echo e($cars->price); ?>/-</h3>
          <span>Per Day</span>
         
        </div>
      </div>
     
    </div>
  </div>
</div>

<div class="container my-4">
  <div><span class="badge mb-4">NOTE:</span>  Please enter correct details for your booking. These details are necessary to verify your identity</div>
  
    <div class="card p-4">
      
    <form action="<?php echo e(url('/rentform')); ?>" method="POST" >
    <?php echo csrf_field(); ?>
    <div class="heading">Customer Details</div>
  <div class="row mt-2">
   
    <div class="col-md-6">
        <div class="form-group">
        <label class="font-weight-bolder text-dark">Car Selected</label>
          <input class="form-control"  name="selected" value="<?php echo e($cars->carname); ?>" required >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        
          <input type="hidden"  class="form-control"   name="price" value="<?php echo e($cars->price); ?>" required >
        </div>
      </div>
    <div class="col-md-6">
        <div class="form-group">
        <label class="font-weight-bolder text-dark">Pick-up Date</label>
          <input class="form-control" type="date" name="date1"  id="date1" required >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label class="font-weight-bolder text-dark">Drop-off Date</label>
          <input class="form-control" type="date" name="date2"  id="date2" required >
        </div>
      </div>
    <div class="col-md-6">
      <div class="form-group">
      <label class="font-weight-bolder text-dark">Customer Fullname</label>
        <input class="form-control" type="text" name="name"  id="owner_name" required placeholder="Enter your name">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="font-weight-bolder text-dark">Customer CNIC</label>
        <input class="form-control"type="text" name="CNIC"  id="owner_name" required placeholder="Enter your contact" >
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label  class="font-weight-bolder text-dark">Customer Contact</label>
        <input type="text" name="Contact"  id="contact" required placeholder="Enter your email"class="form-control">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label  class="font-weight-bolder text-dark">Customer Email</label>
        <input type="email" name="Email"  id="email" required  placeholder="Enter your address" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label  class="font-weight-bolder text-dark">Customer Address</label>
        <input  type="text" rows="3" name="Address" required  id="address" placeholder="Enter your vehicle" class="form-control">
      </div>
    </div>
 

  </div>
  <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/rentprice/')); ?>">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </a>
          
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-danger text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-danger ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            <?php endif; ?>
            <?php endif; ?>
</form>
 </div> 
</div>






<?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\Autozone\resources\views/rentform.blade.php ENDPATH**/ ?>