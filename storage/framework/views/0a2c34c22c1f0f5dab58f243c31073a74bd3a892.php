<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

<section class="vehicles" id="vehicles">

<h1 class="heading"> popular <span>vehicles</span> </h1>

<div class="swiper vehicles-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide box">
            <img src="image/vehicle-1.png" alt="">
            <div class="content">
                <h3>new model</h3>
                <div class="price"> <span>price : </span> $62,000/- </div>
                <p>
                    new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol
                    <span class="fas fa-circle"></span> 183mph
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-2.png" alt="">
            <div class="content">
                <h3>new model</h3>
                <div class="price"> <span>price : </span> $62,000/- </div>
                <p>
                    new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol
                    <span class="fas fa-circle"></span> 183mph
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-3.png" alt="">
            <div class="content">
                <h3>new model</h3>
                <div class="price"> <span>price : </span> $62,000/- </div>
                <p>
                    new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol
                    <span class="fas fa-circle"></span> 183mph
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-4.png" alt="">
            <div class="content">
                <h3>new model</h3>
                <div class="price"> <span>price : </span> $62,000/- </div>
                <p>
                    new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol
                    <span class="fas fa-circle"></span> 183mph
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-5.png" alt="">
            <div class="content">
                <h3>new model</h3>
                <div class="price"> <span>price : </span> $62,000/- </div>
                <p>
                    new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol
                    <span class="fas fa-circle"></span> 183mph
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-6.png" alt="">
            <div class="content">
                <h3>new model</h3>
                <div class="price"> <span>price : </span> $62,000/- </div>
                <p>
                    new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol
                    <span class="fas fa-circle"></span> 183mph
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

    </div>

    <div class="swiper-pagination"></div>

</div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".vehicles-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
</script>
<?php /**PATH E:\Autozone1\resources\views/carslider.blade.php ENDPATH**/ ?>