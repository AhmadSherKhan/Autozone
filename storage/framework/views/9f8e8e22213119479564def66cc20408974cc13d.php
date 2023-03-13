<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid mx-1">
    <div class="row">
      <div class="col-sm-6">
    
        <div class="cardetails">
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
        </div>
        

      </div>

      <div class="col-sm-6">
    
    <div class="cardetails">
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
    </div>
    

  </div>
    </div>
  </div>
  
<?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Autozone1\resources\views/cardetails.blade.php ENDPATH**/ ?>