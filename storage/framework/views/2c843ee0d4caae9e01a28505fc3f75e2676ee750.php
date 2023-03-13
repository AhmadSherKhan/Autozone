<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
</head>
<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  
<div class="container con-1">
<div class="title">Car Services in Lahore</div>
  <div class="row">
    <div class="col servicetype">
      
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="servicebox">
        <div class="images">
          <img src="/serviceimage/<?php echo e($item->image); ?>" alt="">
        </div>
        <div class="cl2">
        <span class="servicename"><?php echo e($item->servicename); ?></span><br>
        <span class="price"><?php echo e($item->price); ?></span>
        <span>-Per Car</span>
        <p style="font-size:1rem;"><?php echo e($item->description); ?></p>
        <button class="btn btn-primary serv-btn ml-1" style="margin-top:1rem">Add Service</button>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   

    </div>
  </div>
</div>

</body>
</html><?php /**PATH E:\Autozone1\resources\views/servicelist.blade.php ENDPATH**/ ?>