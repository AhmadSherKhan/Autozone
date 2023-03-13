<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<section class="banner-main services-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col serviceshero">
                <div class="text-bg">
                    <p class="h1">Car Autoparts in Lahore</p>
                    <p class="h3">Genuine Car Autoparts At Affordable Prices in Lahore</p>
                </div>
                <div class="images">
                    <img src="../images/autopart-bg1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('allproducts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Autozone1\resources\views/autoparts.blade.php ENDPATH**/ ?>