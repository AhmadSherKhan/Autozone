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
<body style="background:#eee;">
  

  <div class="container">
    <div class="row">

      <div class="col-md-4 my-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-header bg-dark text-light">Auto-parts Category</h2>
            <p class="card-text">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <ul>
                  <li class="my-2 pl-2"><a href="<?php echo e(url ('/productswrtcategory/'.$category->slug)); ?>"> <?php echo e($category->name); ?> </a></li>
              </ul>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
          </div>
        </div>
      </div>
    
      <div class="col-md-8 my-4">
        <div class="card">
          <div class="card-body ">
            <h2 class="card-header bg-dark text-light text-center text-lg">Top Selling Products</h2>
            <div class="d-flex">

              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card my-2 m-2" style="width:250px;">
                <div class="card-body">
                  <div>
                    <img src="<?php echo e(asset( $product->productimages[0]->image)); ?>" style='border-bottom:.1px solid rgba(0,0,0,.1)'  alt="<?php echo e($product->name); ?>">
                  </div>
                  <div class="text-center">
                    <a href="<?php echo e(url ('/productcard/'.$product->id)); ?>" class="servicename mt-4"><?php echo e($product->name); ?></a><br>
                    <span class="price my-2"><?php echo e($product->price); ?></span><br>
                    <p class="des"><?php echo e($product->small_description); ?> </p>
                  </div>
                </div>
              </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    
      <div class="d-flex justify-content-center mx-auto my-4">
        <?php echo $data->links(); ?>

    </div>

    </div>
  </div>






</body>
</html>














































<?php /**PATH E:\Autozone\resources\views/allproducts.blade.php ENDPATH**/ ?>