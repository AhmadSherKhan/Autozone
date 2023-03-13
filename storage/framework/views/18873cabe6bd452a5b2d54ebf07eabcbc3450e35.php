<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" 
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: #eef5fc;;">
 
<div class="container">
<div style="text-align:center;">
    <strong><i class="feature">Top Selling Products</i></strong>
</div>
  <div class="row">

  <div class="col-md-3 mb-4">
    <div class="category">
        <h1>Category</h1>
        <ul>
            <li><a href="">Engine & Mechanical</a></li>
            <li><a href="">Filters</a></li>
            <li><a href="">Suspension</a></li>
            <li><a href="">Oil Filters</a></li>
            <li><a href="">Spark Plugs</a></li>
            <li><a href="">Oxygen Sensors</a></li>
            <li><a href="">Interior</a></li>
            <li><a href="">Exterior</a></li>
        </ul>
    </div>
  </div>

    <div class="col-md-9  servicetype product-type">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="product-box">
        <div class="images">
          <img src="/productimage/<?php echo e($product->image); ?>" alt="">
        </div>
        <div class="cl2">
        <span class="servicename"><?php echo e($product->productname); ?></span><br>
        <span class="price"><?php echo e($product->price); ?></span>
        </div>
        <button class="btn btn-primary ml-1" style="margin-top:1rem">Add Service</button>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      

    </div>
    <div class="d-flex justify-content-center mx-auto my-4">
            <?php echo $data->links(); ?>

        </div>
  </div>
</div>
</body>
</html>














































<?php /**PATH E:\Autozone1\resources\views/allproducts.blade.php ENDPATH**/ ?>