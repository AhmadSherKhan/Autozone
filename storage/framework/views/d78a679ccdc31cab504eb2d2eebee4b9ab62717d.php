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
        <h3 style="font-weight: bolder; border-bottom:.1px solid rgb(80, 79, 79);">Auto-Parts Categories</h3>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul>
            <li class="my-2"><a href="<?php echo e(url ('productswrtcategory/'.$categoryname->slug)); ?>"> <?php echo e($categoryname->name); ?> </a></li>
        </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

    <div class="col-md-9  servicetype product-type">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="product-box">
        <div class="images">
          <img src="<?php echo e(asset( $product->productimages[0]->image)); ?>" alt="<?php echo e($product->name); ?>">
        </div>
        <div class="cl2">
        <a href="/productcard" class="servicename"> <?php echo e($product->name); ?> </a><br>
        <p class="des"> <?php echo e($product->description); ?> </p><br>
        <span class="price"><?php echo e($product->price); ?></span>
        </div>
        <button class="btn btn-primary ml-1" style="margin-top:1rem">Add to Cart</button>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
  </div>
</div>
</body>
</html>


















































<?php /**PATH E:\Autozone\resources\views/productswrtcategorya.blade.php ENDPATH**/ ?>