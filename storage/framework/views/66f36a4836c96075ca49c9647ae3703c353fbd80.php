<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>


<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/productimage/<?php echo e($product->image); ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo e($product->productname); ?></h3>
                    <div class="price"><?php echo e($product->price); ?></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});
</script>
</body>
</html><?php /**PATH E:\Autozone1\resources\views/autopartslider.blade.php ENDPATH**/ ?>