<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    
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
            <input class="form-control"  name="selected"  required >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
          
            <input type="hidden"  class="form-control"   name="price"  required >
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
    
</body>
</html>

<?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Autozone\resources\views/serviceforma.blade.php ENDPATH**/ ?>